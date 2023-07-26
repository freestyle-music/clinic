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
                style="min-height:125px; height: 58px; width: 10%; padding: 4px 0 0 4px; border-right:1px solid gray; border-bottom:1px solid gray"
                >
                  <div class="day"><p>{{ day.day }}</p></div>
                  <div class="dflex">
                    <div v-if="hasVisitDate(day)" class="view day-btn">
                    <button>
                      <a href="" @click="calendarView">View</a>
                    </button>
                    </div>
                    <div v-if="hasVisitDate(day)" class="details day-btn">
                      <button>
                        <a href="">Details</a>
                      </button>
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
    };
  },
  methods: {
    hasVisitDate(day) {
      const selectedDate = new Date(this.selectedYear, this.selectedMonth - 1, day.day);
      return this.visitDate.some(date => date !== null && new Date(date).toDateString() === selectedDate.toDateString());
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
      })
      .catch(error => {
        console.error(error);
      });
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
};
</script>
ccc
