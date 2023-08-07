<template>
    <div class="wrapper">
      <div class="container-fuild">
        <div id="headTitle">
          <div id="logo">
            <img alt="Healthbook" height="44" src="/img/logo.png" width="70" />
          </div>
          <h1 id="title">
            calender
          </h1>
        </div>
      </div>
      <div class="container-fuild">
        <Header />
        <ol id="topicPath">
          <li style="margin-left: 300px">
            <router-link to="">
              <a href="dashbaord">
                <font style="vertical-align: inherit"></font>
                <font style="vertical-align: inherit">
                  calenderView
                </font>
              </a>
            </router-link>
          </li>
        </ol>
      </div>
      <div class="p-3">
        <div class="calendar-box">
          <div class="search-box">
            <div class="search-box_inner">
              <div class="search-box">
                <div class="search-box-title">Search</div>
                <div class="box">
                  <div class="box-content">
                    <table>
                      <thead>
                        <tr>
                          <th class="cal-th">Consultation</th>
                          <td class="cal-tll">{{ changeDate ? formatDate(changeDate) : `${selectedDate}${getMonthName(month)} ${displayedYear}` }}</td>
                              <flat-pickr v-model="changeDate" :config="flatpickrConfig" placeholder="Change Date" style=" background-color: #f9a347; color: #fff; border: none; text-align: center;"/>
                          </tr>
                      </thead>
                      <tbody class="cal-body">
                        <tr>
                          <th class="cal-th">Male</th>
                          <td class="cal-w18">{{ maleCount }}<br>people</td>
                          <th class="cal-th">Female</th>
                          <td class="cal-w18">{{ femaleCount }}<br>people</td>
                          <th class="cal-th">child</th>
                          <td class="cal-w18">{{ childCount }}<br>people</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="search-box-footer">
                      <div class="day-btn">
                        <button>
                          <a href="/calendar">Back</a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </template>
  
  <script>
  import axios from "axios";
  import Header from "../Header.vue";
  import moment from 'moment';
  import Footer from "../footer.vue";
  import FlatPickr from 'vue-flatpickr-component';
  import 'flatpickr/dist/flatpickr.css';

  export default {
    data() {
      return {
        datas: [],
        visitDate: [],
        resultFind: [],
        day: [],
        currentDate: new Date(),
        selectedYear: null,
        selectedMonth: null,
        years: [],
        months: [],
        displayedMonth: "",
        displayedYear: "",
        weekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        calendarData: [],
        showModal: false,
        modalData: null,
        selectedDate: null,
        visitDateData: [],
        maleCount: 0,
        femaleCount: 0,
        childCount: 0,
        hasVisitDate: [],
        month: null,
        selectMonth: null,
        filteredData: [],
        changeDate: null,
      };
    },
    created() {
      // dayDateを使ってデータを取得・表示する処理を行う
      const dayDate = this.$route.params.dayDate;
      this.selectedDate = dayDate;
    },
    methods: {
      formatDate(date) {
        // Moment.js を使用して指定したフォーマットで日付を表示
        return moment(date).format('D MMM YYYY');
      },
      someMethod() {
        // メソッド内で hasVisitDate を使用する場合
        this.hasVisitDate();
      },
      generateCalendarData() {
        const firstDay = new Date(this.selectedYear, this.selectedMonth - 1, 1);
        const lastDay = new Date(this.selectedYear, this.selectedMonth, 0);
        const startDayOfWeek = firstDay.getDay();
        const endDayOfWeek = lastDay.getDay();
        const daysInMonth = lastDay.getDate();
        const calendarData = [];
        let currentDay = 1;

        // visitDateを日付オブジェクトに変換
        const visitDate = new Date(this.selectedDate); // selectedDateの値をDateオブジェクトに変換

        for (let week = 0; week < 6; week++) {
          const weekRow = [];

          for (let day = 0; day < 7; day++) {
            let dayOfMonth; // dayOfMonthをループ内で定義

            if (week === 0 && day < startDayOfWeek) {
              const prevMonthLastDay = new Date(
                this.selectedYear,
                this.selectedMonth - 1,
                0
              ).getDate();
              dayOfMonth = prevMonthLastDay - startDayOfWeek + day + 1; // dayOfMonthを代入
              weekRow.push({
                day: dayOfMonth,
                outside: true,
                hasValue: false // hasValueをfalseに設定
              });
            } else if (currentDay > daysInMonth) {
              dayOfMonth = currentDay - daysInMonth; // dayOfMonthを代入
              weekRow.push({
                day: dayOfMonth,
                outside: true,
                hasValue: false // hasValueをfalseに設定
              });
              currentDay++;
            } else {
              dayOfMonth = currentDay; // dayOfMonthを代入
              const year = this.selectedYear;
              const month = this.selectedMonth;
              const day = currentDay;
              const targetDate = new Date(year, month - 1, day);

              weekRow.push({
                day: dayOfMonth,
                outside: false,
                hasValue: targetDate.getTime() === visitDate.getTime() // 日付が一致する場合はhasValueをtrueに設定
              });
              currentDay++;
            }
          }

          // 6週目が翌月の日付だけの場合は表示しない
          if (weekRow.every(day => day.outside)) {
            break;
          }

          calendarData.push(weekRow);
        }

        this.calendarData = calendarData;
      },

      openModal() {
        this.showModal = true;
        this.generateCalendarData(); // カレンダーデータを生成
      },

      async filterData() {
        // Vue Router のパラメータから月日情報を取得
        const dayDate = this.$route.params.dayDate;
        const month = this.$route.params.month; 

        // moment.jsを使って日付を変換
        const formattedDate = moment(`${dayDate}-${month}`, 'DD-MM').format('YYYY-MM-DD');//例）2023-07-18

        // 選択された月日を表示
        this.selectedDate = dayDate;
        this.selectMonth = month;

        try {
          // 日付が一致するデータをサーバーから取得
          const response = await axios.get('/api/v1/calendar', {
            params: {
              visitDate: formattedDate
            }
          });
          
          response.data.datas = Array.from(response.data.datas);

          this.visitDateData = response.data.datas; 

          const filteredData = Array.from(this.visitDateData).filter(data => {
            const dataDate = new Date(data.visit_date);
            return dataDate.toDateString() === new Date(formattedDate).toDateString();
          });

          // console.log(filteredData);
          const countDate = JSON.parse(JSON.stringify(filteredData));

          // Initialize the counts
          let maleCountAbove13 = 0;
          let femaleCountAbove13 = 0;
          let childCount = 0;

          // Calculate the age for each individual and update the counts accordingly
          countDate.forEach(data => {
            const birthDate = new Date(data.birstdate);
            const age = this.calculateAge(birthDate);
            if (age >= 13) {
              if (data.sex === 'Male') {
                maleCountAbove13++;
              } else if (data.sex === 'Female') {
                femaleCountAbove13++;
              }
            } else {
              childCount++;
            }
          });

          // フィルタリングしたデータを元にMale、Female、Childのカウントを行う
          this.maleCount = maleCountAbove13;
          this.femaleCount = femaleCountAbove13;
          this.childCount = childCount;

          // generateCalendarData()を呼び出す
          this.generateCalendarData();

        } catch (error) {
          console.error("Error in filterData:", error);
        }
      },

      calculateAge(birstdate) {
      const birthDate = new Date(birstdate);
      const currentDate = new Date();

      let age = currentDate.getFullYear() - birstdate.getFullYear();
      // 誕生日がまだ来ていなければ1歳引く
      if (
        currentDate.getMonth() < birthDate.getMonth() ||
        (currentDate.getMonth() === birthDate.getMonth() && currentDate.getDate() < birthDate.getDate())
      ) {
        age--;
      }
      console.log(age);
      return age;
      },

      showView(day) {
        this.modalData = {
          title: "Details for " + day.date,
          description: "This is the description for " + day.date
        };
        this.showModal = true;
      },
      closeModal() {
        this.showModal = false;
        this.modalData = null;
      },
      getMonthName(month) {
        return moment().month(month - 1).format('MMMM');
      },
      searchCalendar() {
        this.displayedMonth = this.months[this.selectedMonth - 1];
        this.displayedYear = this.selectedYear.toString();
        this.generateCalendarData();
      },
      prevMonth() {
        if (this.selectedMonth === 1) {
          this.selectedMonth = 12;
          this.selectedYear--;
        } else {
          this.selectedMonth--;
        }
        this.searchCalendar();
      },
      nextMonth() {
        if (this.selectedMonth === 12) {
          this.selectedMonth = 1;
          this.selectedYear++;
        } else {
          this.selectedMonth++;
        }
        this.searchCalendar();
      },
      fetchPatients() {
        axios.get('/api/v1/calendar')
          .then(response => {
            this.datas = response.data.datas;
            this.visitDate = JSON.parse(JSON.stringify(response.data.visitDate)); // Proxy(Array)を通常の配列に変換
          })
          .catch(error => {
            console.error(error);
          });
      },
    },
    computed: {
      isChangeDateVisible() {
        // changeDate の値が存在する場合に true を返す
        return this.changeDate !== null && this.changeDate !== undefined;
      },
      formatdata(date) {
        return moment(date).format('DD MMM YYYY');
      }
    },
    mounted() {
      // axios.get("/api/calendar").then((response) => (this.datas = response.data));
      const currentYear = this.currentDate.getFullYear();
      const currentMonth = this.currentDate.getMonth() + 1;
      this.selectedYear = currentYear;
      this.selectedMonth = currentMonth;
      this.displayedMonth = currentMonth;
      this.displayedYear = currentYear.toString();
      this.selectedDate = this.$route.params.date;
      this.filterData();
      this.fetchPatients();
      this.month =  this.$route.params.month;

      for (let year = 2000; year <= 2030; year++) {
        this.years.push(year);
      }

      for (let month = 1; month <= 12; month++) {
        this.months.push(month);
      }
    },

    components: { Header, Footer, FlatPickr },
  };
</script>