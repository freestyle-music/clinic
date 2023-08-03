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
                        <td class="cal-tll">{{ selectedDate }}{{ getMonthName(month) }} {{ displayedYear }}</td>
                        <td class="day-btn"><button><a href="#"><input type="date" name="Change Date" id="">Change Date </a></button></td>
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

                  <!-- modal  -->
                  <div v-if="showModal" class="modal">
                    <div class="modal-content">
                      <div class="calendar-box-title search-box-title calendar-header">
                        <div class="calendar-header_btn">
                          <button type="button" @click="prevMonth">&lt;</button>
                          <h2 class="calendar-title">{{ getMonthName(displayedMonth) }} {{ displayedYear }}</h2>
                          <button type="button" @click="nextMonth">&gt;</button>
                        </div>
                      </div>
                      <!-- カレンダーの内容 -->
                      <div class="calendar-box-content">
                        <table class="calendar-grid">
                          <thead>
                            <tr class="calendar-weekly">
                              <th v-for="day in weekDays" :key="day" class="calendar-youbi">{{ day }}</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="(week, index) in calendarData" class="v-calendar-weekly__week" :key="index" style="border-left:1px solid gray;border-top:1px solid gray">
                              <td
                                v-for="day in week"
                                :key="day.day"
                                class="calendar-color"
                                :class="{ outside: day.outside }"
                                style="min-height:125px; height: 78px; width: 10%; padding: 4px 0 0 4px; border-right:1px solid gray; border-bottom:1px solid gray"
                              >
                                <div class="day"><p>{{ day.day }}</p></div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="search-box-footer">
                    <div class="day-btn">
                      <button  @click="goBack">
                        <a href="#">Back</a>
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
    };
  },
  created() {
    // dayDateを使ってデータを取得・表示する処理を行う
    const dayDate = this.$route.params.dayDate;
    this.selectedDate = dayDate;
  },
  methods: {
    goBack() {
      // 1ステップ前に遷移する
      this.$router.go(-1);
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
    
    // Maleの13歳以上のカウントを返す関数
    getMaleCount() {
      const maleCount = this.filteredData.reduce((count, data) => {
        if (data.sex === "Male" && this.calculateAge(data.birthdate) >= 13) {
          count++;
        }
        return count;
      }, 0);

      return maleCount;
    },
    // Femaleの13歳以上のカウントを返す関数
    getFemaleCount() {
      return this.filteredData.reduce((count, data) => {
        if (data.sex === "Female" && this.calculateAge(data.birthdate) >= 13) {
          count++;
        }
        return count;
      }, 0);
    },

    // 13歳未満のカウントを返す関数
    getChildCount() {
      return this.filteredData.reduce((count, data) => {
        if (this.calculateAge(data.birthdate) < 13) {
          count++;
        }
        return count;
      }, 0);
    },

    // 誕生日を指定して年齢を計算する関数
    calculateAge(birthdate) {
      const birthDate = new Date(birthdate);
      const currentDate = new Date();

      let age = currentDate.getFullYear() - birthDate.getFullYear();

      // 誕生日がまだ来ていなければ1歳引く
      if (
        currentDate.getMonth() < birthDate.getMonth() ||
        (currentDate.getMonth() === birthDate.getMonth() && currentDate.getDate() < birthDate.getDate())
      ) {
        age--;
      }

      return age;
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
        console.log(formattedDate);
        
        response.data.datas = Array.from(response.data.datas);

        console.log(response.data.datas);

        this.visitDateData = response.data.datas; 

        const filteredData = Array.from(this.visitDateData).filter(data => {
          const dataDate = new Date(data.visit_date);
          return dataDate.toDateString() === new Date(formattedDate).toDateString();
        });

        console.log(filteredData);

        // フィルタリングしたデータを元にMale、Female、Childのカウントを行う
        this.maleCount = this.getMaleCount();
        this.femaleCount = this.getFemaleCount();
        this.childCount = this.getChildCount();

        // generateCalendarData()を呼び出す
        this.generateCalendarData();

      } catch (error) {
        console.error("Error in filterData:", error);
      }
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
        this.resultFind = response.data.resultFind;
      })
      .catch(error => {
        console.error(error);
      });
    },
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

  components: { Header, Footer },
};
</script>