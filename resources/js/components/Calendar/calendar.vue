<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo">
          <img alt="Healthbook" height="44" src="img/logo.png" width="70" />
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
                calender
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="p-3">
      <div class="calendar-box">
        <div class="calendar-box-title search-box-title calendar-header">
          <div class="calendar-header">
            <h2 class="calendar-title">As of {{ getMonthName(displayedMonth) }} {{ displayedYear }}</h2>
            <div class="calendar-search">
              <input v-model="selectedYear" class="calendar-input" type="number" min="1950" max="2100" placeholder="Year">
              <p class="calendar-p">Year</p>
              <input v-model="selectedMonth" class="calendar-input" type="number" min="1" max="12" placeholder="Month">
              <p class="calendar-p">Month</p>
              <button class="btn-radius btn btn-sm search-btn" @click="searchCalendar">Search</button>
            </div>
          </div>
          <div class="calendar-header_btn">
            <button type="button" @click="prevYear">&lt;&lt;</button>
            <button type="button" @click="prevMonth">&lt;</button>
            <button class="calendar-btn btn btn-sm" type="button" @click="thisMonth">this</button>
            <button type="button" @click="nextMonth">&gt;</button>
            <button type="button" @click="nextYear">&gt;&gt;</button>
          </div>
        </div>
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
<<<<<<< HEAD
                style="min-height:125px; height: 78px; width: 10%; padding: 4px 0 0 4px; border-right:1px solid gray; border-bottom:1px solid gray"
                >
=======
                style="min-height:125px; height: 78px; width: 10%; padding: 4px 0 0 4px; border-right:1px solid gray; border-bottom:1px solid gray">
>>>>>>> origin/develop1
                  <div class="day"><p>{{ day.day }}</p></div>
                  <div v-if="hasVisitDate(day)" class="mt-10">
                    <p class="day-p">{{ hasVisitDate(day) }}</p>
                    <p class="day-p">Patient</p>
                  </div>
                  <div class="dflex">
                    <div v-if="hasVisitDate(day)" class="view day-btn">
                    <button>
                      <router-link :to="{ name: 'calendarView', params: { dayDate: day.day.toString(), month: day.dayData.month } }">
                      <a href="#">View</a>
                      </router-link>
                    </button>
                    </div>
                    <div v-if="hasVisitDate(day)" class="details day-btn">
<<<<<<< HEAD
                      <button @click="showDetail(day)">
                        <a href="">Details</a>
                      </button>
=======
                      <button class="details-button" @click="showDetails(day)">Details</button>
                      <!-- <button>
                        <a href="" @click="showDetails">Details</a>
                      </button> -->
>>>>>>> origin/develop1
                    </div>
                    <div v-else class="holiday">
                      holiday
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="showModal" class="modal">
          <div class="modal-content">
            <span class="close" @click="closeModal">&times;</span>
            <!-- データベースから取得した情報を表示するコンテンツをここに記述 -->
            <h2 class="detailed-title">Detailed Information</h2>
            <div class="modal-table">
              <p class="modal-day">{{ modalData.day }}</p>
              <table id="pr-tb" >
                <!-- テーブルのヘッダー -->
                  <tr>
                    <td class="table-cell">Number of reservations</td>
                    <td class="table-cell">{{ modalData.detailmode.length }}</td>
                  </tr>
                  <tr>
                    <td class="table-cell">Male</td>
                    <td class="table-cell">{{ numberOfMale }}</td>
                  </tr>
                  <tr>
                    <td class="table-cell">Female</td>
                    <td class="table-cell">{{ numberOfFemale }}</td>
                  </tr>
                  <tr>
                    <td class="table-cell">Child</td>
                    <td class="table-cell">{{ numberOfChild}}</td>
                  </tr>
                </table>
                <div style="height: 50px;"></div>

                <div class="modal-table scrollable-container">
                  <table id="weekday-tb">
                  <!-- テーブルのヘッダー -->
                  <thead>
                    <tr class="p-bg" style="text-align: center !important;">
                      <th class="text-center header-cell">Patient</th>
                      <th class="text-center header-cell">Sex</th>
                      <th class="text-center header-cell">Age</th>
                      <th class="text-center header-cell">Date of Birth</th>
                      <th class="text-center header-cell">Phone Number</th>
                      <th class="text-center header-cell">Description</th>
                    </tr>
                  </thead>
                  <!-- テーブルのボディ -->
                  <tbody>
                    <tr v-for="cal in modalData.detailmode" :key="cal.paId">
                      <td>{{ cal.lastname }} {{ cal.firstname }}</td>
                      <td>{{ cal.sex }}</td>
                      <td>{{ cal.age }}</td>
                      <td>{{ cal.birstdate }}</td>
                      <td>{{ cal.phone1 }}</td>
                      <td>{{ cal.id }}</td>
                    </tr>
                  </tbody>
                </table>
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
<<<<<<< HEAD
=======
      detailmode: [],
>>>>>>> origin/develop1
    };
  },
  methods: {
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

    hasVisitDate(day) {
      const selectedDate = new Date(this.selectedYear, this.selectedMonth - 1, day.day);
      const count = this.visitDate.reduce((acc, date) => {
        if (date !== null && new Date(date).toDateString() === selectedDate.toDateString()) {
          return acc + 1;
        } else {
          return acc;
        }
      }, 0);
      return count;
    },

<<<<<<< HEAD
=======
    async fetchPatients() {
      try {
        const response = await axios.get('/api/v1/calendar');
        this.datas = response.data.datas;
        this.visitDate = JSON.parse(JSON.stringify(response.data.visitDate)); // Proxy(Array)を通常の配列に変換
        this.detailmode = response.data.detailmode;
      } catch (error) {
        console.error(error);
      }
    },

>>>>>>> origin/develop1
    generateCalendarData() {
      const firstDay = new Date(this.selectedYear, this.selectedMonth - 1, 1);
      const lastDay = new Date(this.selectedYear, this.selectedMonth, 0);
      const startDayOfWeek = firstDay.getDay();
      const endDayOfWeek = lastDay.getDay();
      const daysInMonth = lastDay.getDate();
      const calendarData = [];
      let currentDay = 1;

      // visitDateを日付オブジェクトに変換
      const visitDate = new Date(this.visitDate); // visitDateの値をDateオブジェクトに変換

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
              hasValue: targetDate.getTime() === visitDate.getTime(),// 日付が一致する場合はhasValueをtrueに設定
              dayData: {
              dayOfMonth: dayOfMonth,
              month: this.selectedMonth, // 選択された月を保存
              },
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

    searchCalendar() {
      this.displayedMonth = this.months[this.selectedMonth - 1];
      this.displayedYear = this.selectedYear.toString();
      this.generateCalendarData();
    },
    prevYear() {
      this.selectedYear--;
      this.searchCalendar();
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
    thisMonth() {
      const currentYear = this.currentDate.getFullYear();
      const currentMonth = this.currentDate.getMonth() + 1;
      this.selectedYear = currentYear;
      this.selectedMonth = currentMonth;
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
    nextYear() {
      this.selectedYear++;
      this.searchCalendar();
    },
    getMonthName(month) {
      return moment().month(month - 1).format('MMMM');
    },
    fetchPatients() {
      axios.get('/api/v1/calendar')
      .then(response => {
        this.datas = response.data.datas;
        this.visitDate = JSON.parse(JSON.stringify(response.data.visitDate)); // Proxy(Array)を通常の配列に変換
<<<<<<< HEAD
        this.calendar = response.data.calendar;
=======
        this.detailmode = response.data.detailmode;
>>>>>>> origin/develop1
      })
      .catch(error => {
        console.error(error);
      });
    },

    showDetails(day) {
  const selectedDate = new Date(this.selectedYear, this.selectedMonth - 1, day.day);
  const formattedDate = selectedDate.toLocaleDateString('en-US', {
    day: 'numeric',
    month: 'long',
    year: 'numeric',
  }).replace(',', '');

  const formattedDateParts = formattedDate.split(' ');
  const formattedDateInEnglish = `${formattedDateParts[1]} ${formattedDateParts[0]} ${formattedDateParts[2]}`;

  // PrescriptionsのvisitDateとカレンダーの日付を比較して、一致するデータを取得
  const filteredDetails = this.detailmode.filter(data => {
    const visitDate = new Date(data.visit_date);
    return visitDate.toDateString() === selectedDate.toDateString();
  });

  this.modalData = {
    day: formattedDateInEnglish,
    detailmode: filteredDetails,
  };

  this.showModal = true;
},

closeModal() {
     this.showModal = false;
     this.modalData = null;
     },
  },

  mounted() {
    // axios.get("/api/calendar").then((response) => (this.datas = response.data));
    this.fetchPatients(); // ページが読み込まれた際にデータを取得
    const currentYear = this.currentDate.getFullYear();
    const currentMonth = this.currentDate.getMonth() + 1;
    this.selectedYear = currentYear;
    this.selectedMonth = currentMonth;
    this.displayedMonth = currentMonth;
    this.displayedYear = currentYear.toString();
  


    for (let year = 2000; year <= 2030; year++) {
      this.years.push(year);
    }

    for (let month = 1; month <= 12; month++) {
      this.months.push(month);
    }

    this.generateCalendarData();
  },

  components: { Header, Footer },

  // 予約数

// computed: {
//   numberOfChild() {
//     if (!this.modalData || !this.modalData.detailmode) return 0;
//     const currentDate = new Date(); // 今日の日付を取得
//     const count = { Male: 0, Female: 0, Child: 0 };
//     this.modalData.detailmode.forEach(item => {
//       const birthDate = new Date(item.birstdate);
//       const age = currentDate.getFullYear() - birthDate.getFullYear();
//       if (age <= 13) {
//         count.Child++;
//       } else {
//         if (item.sex === 'Male') {
//           count.Male++;
//         } else if (item.sex === 'Female') {
//           count.Female++;
//         }
//       }
//     });
//     return count;
//   },
// },

computed: {
    numberOfMale() {
      if (!this.modalData || !this.modalData.detailmode) return 0;
      return this.modalData.detailmode.filter(item => item.sex === 'Male').length;
    },
    numberOfFemale() {
      if (!this.modalData || !this.modalData.detailmode) return 0;
      return this.modalData.detailmode.filter(item => item.sex === 'Female').length;
    },
    numberOfChild() {
      if (!this.modalData || !this.modalData.detailmode) return 0;
      const currentDate = new Date();
      let childCount = 0;
      this.modalData.detailmode.forEach(item => {
        const birthDate = new Date(item.birstdate);
        const age = currentDate.getFullYear() - birthDate.getFullYear();
        if (age <= 13) {
          if (item.sex === 'Male') {
            childCount++;
          } else if (item.sex === 'Female') {
            childCount++;
          }
        }
      });
      return Math.max(childCount, 0); // Childの数が0未満にならないように調整
    },
  },


};
</script>