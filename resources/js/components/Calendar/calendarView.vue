<template>
    <div class="wrapper">
      <!-- header -->
      <div class="container-fuild">
        <div id="headTitle">
          <div id="logo"> <img alt="Healthbook" height="44" src="img/logo.png" width="70"> </div>
          <h1 id="title">Calendar</h1>
        </div>
      </div>
      <div class="container-fuild">
        <Header />
        <ol id="topicPath">
          <li style="margin-left: 280px;">
            <router-link to="/dashboard">
              <a href="dashbaord">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit"> Calendar </font>
                </font>
              </a>
            </router-link>
          </li>
        </ol>
      </div>
      <!-- header -->
  
      <!-- calendar -->
      <div class="container-fuild">
        <div class="calendar">
          <div class="header">
            <div class="current-container">
              <div class="current-month-year" v-if="!isSearching">
                As of {{ getMonthName(currentDate.getMonth()) }} {{ currentDate.getFullYear() }}
              </div>
              <div class="current-month-year" v-if="isSearching">
                As of {{ getMonthName(searchedMonth) }} {{ searchedYear }}
              </div>
              <div class="input-container">
                <input id="year-input" v-model="inputYear" type="number" min="1900" max="2099" />
                <label for="year-input">Year</label>
              </div>
              <div class="input-container">
                <input id="month-input" v-model="inputMonth" type="number" min="1" max="12" />
                <label for="month-input">Month</label>
              </div>
              <button class="search-button" @click="searchCalendar">Search</button>
            </div>
            <div class="arrow-container">
              <button class="arrow-button left-arrow-button square-button" @click="previousYear">&lt;&lt;</button>
              <button class="arrow-button square-button" @click="previousMonth">&lt;</button>
              <div class="month" v-show="!isSearching || inputYear || inputMonth">
                <button class="square-button this-button" @click="goToCurrentDate">this</button>
              </div>
              <button class="arrow-button square-button" @click="nextMonth">&gt;</button>
              <button class="arrow-button right-arrow-button square-button" @click="nextYear">&gt;&gt;</button>
            </div>
          </div>
          <table>
            <thead>
              <tr>
                <th v-for="day in daysOfWeek" :key="day">{{ day }}</th>
              </tr>
            </thead>
            <tr>
              <td class="blank-row" colspan="7"></td>
            </tr>
            <!-- カレンダーのテンプレート内 -->
            <tbody>
              <tr v-for="week in calendar" :key="week">
                <td v-for="day in week" :key="day.date"
                  :class="['calendar-day', { 'today': isToday(day), 'sunday': day.date === 0 }]">
                  <div class="day-number">
                    <div class="day">{{ day.date }}</div>
                    <div class="center-buttons">
                      <button class="view-button" @click="viewDetails(day)">View</button>
                      <button class="details-button" @click="showDetails(day)">Details</button>
                    </div>
                    <!-- 来院予定がある場合 -->
                    <div class="appointments-count" v-if="hasAppointment(day)">
                      <p>{{ getTotalAppointments(day) }} 人</p>
                    </div>
                    <!-- 来院予定がない場合 -->
                    <div class="holiday" v-else>
                      <p>Holiday</p>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  
      <div v-if="showModal" class="modal">
        <div class="modal-content">
          <span class="close" @click="closeModal">&times;</span>
          <!-- データベースから取得した情報を表示するコンテンツをここに記述 -->
          <div class="my-2 justify-content-center">
            <table id="pr-tb">
              <!-- テーブルのヘッダー -->
              <thead>
                <tr class="p-bg" style="text-align:center !important;">
                  <th class="text-center  header-cell">Patient</th>
                  <th class="text-center  header-cell">Sex</th>
                  <th class="text-center  header-cell">Age</th>
                  <th class="text-center  header-cell">Date of Birth</th>
                  <th class="text-center  header-cell">Phone Number</th>
                  <th class="text-center  header-cell">Description</th>
                </tr>
              </thead>
              <!-- テーブルのボディ -->
              <tbody>
                <tr v-for="cal in calendar">
                  <td>{{ cal.pateinid }}</td>
                  <td>{{ cal.sex }}</td>
                  <td>{{ cal.age }}</td>
                  <td>{{ cal.birstdate }}</td>
                  <td>{{ cal.phone1 }}</td>
                  <td>{{ cal.district }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  
      <!-- footer -->
      <div id="footer">
        <div id="copyright"> Copyright (C) healthbook. ALL Rights Reserved Edit by Lsky </div>
      </div>
      <!-- footer -->
    </div>
  </template>
  
  <script>
  import axios from "axios";
  import pagination from "laravel-vue-pagination";
  import Header from "../Header.vue";
  
  export default {
    components: {
      Header
    },
    data() {
      return {
        currentMonth: "",
        currentDate: null,
        daysOfWeek: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        calendar: [],
        isSearching: false,
        searchedYear: null,
        searchedMonth: null,
        inputYear: null,
        inputMonth: null,
        showModal: false,
        modalData: null,
        prescriptions: [] // 来院予定のデータを格納する配列
      };
    },
    created() {
      this.setCalendarData();
      this.fetchPrescriptions();
    },
    mounted() {
      window.addEventListener("resize", this.setCalendarData);
    },
    destroyed() {
      window.removeEventListener("resize", this.setCalendarData);
    },
    methods: {
      setCalendarData() {
        const now = this.currentDate || new Date();
        const year = now.getFullYear();
        const month = now.getMonth();
        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);
        const numberOfDays = lastDayOfMonth.getDate();
        const startingDayOfWeek = firstDayOfMonth.getDay();
        const calendar = [];
  
        let week = [];
        for (let i = 0; i < startingDayOfWeek; i++) {
          const prevMonthLastDay = new Date(year, month, 0).getDate();
          const prevMonthDay = prevMonthLastDay - (startingDayOfWeek - i) + 1;
          week.push({ date: prevMonthDay, text: "" });
        }
  
        for (let day = 1; day <= numberOfDays; day++) {
          week.push({ date: day, text: "" });
          if (week.length === 7) {
            calendar.push(week);
            week = [];
          }
        }
  
        if (week.length > 0) {
          for (let i = 1; week.length < 7; i++) {
            week.push({ date: i, text: "" });
          }
          calendar.push(week);
        }
  
        this.currentMonth = this.getMonthName(month);
        this.currentDate = now;
        this.calendar = calendar;
      },
      getMonthName(month) {
        const monthNames = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December"
        ];
        return monthNames[month];
      },
      previousYear() {
        const prevYear = this.currentDate.getFullYear() - 1;
        this.currentDate = new Date(prevYear, this.currentDate.getMonth(), this.currentDate.getDate());
        this.setCalendarData();
      },
      previousMonth() {
        const prevMonth = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1);
        this.currentDate = prevMonth;
        this.setCalendarData();
      },
      nextYear() {
        const nextYear = this.currentDate.getFullYear() + 1;
        this.currentDate.setFullYear(nextYear);
        this.setCalendarData();
      },
      nextMonth() {
        const nextMonth = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1);
        this.currentDate = nextMonth;
        this.setCalendarData();
      },
      isToday(day) {
        const today = new Date();
        return (
          day.date === today.getDate() &&
          day.date !== "" &&
          this.currentDate.getMonth() === today.getMonth() &&
          this.currentDate.getFullYear() === today.getFullYear()
        );
      },
      searchCalendar() {
        if (this.inputYear && this.inputMonth) {
          const year = parseInt(this.inputYear);
          const month = parseInt(this.inputMonth) - 1;
          if (!isNaN(year) && !isNaN(month)) {
            this.currentDate = new Date(year, month, 1);
            this.setCalendarData();
            this.searchedYear = year;
            this.searchedMonth = month;
            this.inputYear = null;
            this.inputMonth = null;
          }
        } else {
          this.isSearching = false;
        }
      },
      goToCurrentDate() {
        this.currentDate = new Date();
        this.setCalendarData();
      },
      showDetails(day) {
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
  
      fetchPrescriptions() {
        axios
          .get("api/v1/prescription/index/")
          .then(response => {
            this.prescriptions = response.data.prescriptions;
            this.setCalendarData();
          })
          .catch(error => {
            console.error('Failed to fetch prescriptions:', error);
          });
      },
  
      hasAppointment(day) {
        const currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), day.date);
        return this.prescriptions.some(prescription => {
          const visitDate = new Date(prescription.visit_date);
          return currentDate.toDateString() === visitDate.toDateString();
        });
      },
  
      getTotalAppointments(day) {
        const currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), day.date);
        const appointmentsOnDay = this.prescriptions.filter(prescription => {
          const visitDate = new Date(prescription.visit_date);
          return currentDate.toDateString() === visitDate.toDateString();
        });
        return appointmentsOnDay.length;
      }
    }
  };
  </script>
  
  <style scoped>
  html,
  body {
    height: 100%;
  }
  
  .wrapper {
    font-family: Arial, sans-serif;
  }
  
  .container-fluid {
    width: 100%;
  }
  
  .calendar {
    margin: 10px 10px 25px;
    border: 1px solid #ddedeb;
    box-shadow: 0px 0px 6px #147f7c;
  }
  
  .header {
    background-color: #0d4c62;
    border: 10px solid #0d4c62;
  }
  
  .current-container {
    display: flex;
    color: #f8f5b4;
    float: left;
  }
  
  .current-month-year {
    font-size: 15px;
    margin-left: 10px;
    font-family: Arial, sans-serif;
  }
  
  .input-container {
    color: #f8f5b4;
    margin-left: 10px;
    font-size: 15px;
    height: 20px;
  }
  
  .input-container input {
    height: 100%;
  }
  
  .search-button {
    margin-left: 15px;
    height: 20px;
    font-size: 15px;
    border-radius: 3px;
    border: 1px solid #ccc;
    color: #ffffff;
    background-color: #4397AB;
    display: flex;
    align-items: center;
  }
  
  .arrow-container {
    display: flex;
    justify-content: flex-end;
  }
  
  .arrow-button {
    font-size: 15px;
    background-color: #ffffff;
    border: none;
    cursor: pointer;
    margin: 0 5px;
    color: #4397AB;
  }
  
  .left-arrow-button,
  .right-arrow-button {
    color: #4397AB;
  }
  
  .square-button {
    width: 25px;
    height: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .this-button {
    color: #ffffff;
    background-color: #4397AB;
    width: 50px;
    height: 20px;
    font-size: 15px;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
  }
  
  th {
    height: 1em;
  }
  
  th,
  td {
    width: calc(100% / 7);
    padding: 5px;
    text-align: center;
    border: 1px solid #ccc;
    font-size: 13px;
  }
  
  thead th {
    background-color: #4397AB;
    color: #fff;
  }
  
  thead th:first-child {
    background-color: #dd4356;
  }
  
  thead th:last-child {
    background-color: #45a6db;
  }
  
  th:first-child,
  td:nth-child(7n+1) {
    color: #ffffff;
  }
  
  th:last-child,
  td:nth-child(7n) {
    color: #ffffff;
  }
  
  td:nth-child(7n+1) .day-number .day {
    background-color: #dd4356;
  }
  
  .blank-row {
    height: 30px;
    background-color: #ffffff;
  }
  
  .day {
    color: #ffffff;
  }
  
  .today {
    background-color: #e0e0e0;
  }
  
  .calendar-day {
    height: 75px;
    position: relative;
  }
  
  .day-number {
    position: absolute;
    top: 5px;
    left: 5px;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  
  .day-number .day {
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 14px;
    background-color: #4397AB;
  }
  
  #footer {
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  
  .view-button {
    width: 60px;
    height: 24px;
    background-color: #ff8400;
    border: none;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    margin-right: 6px;
  }
  
  .details-button {
    width: 60px;
    height: 24px;
    background-color: #ff8400;
    border: none;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    margin-left: 6px;
  }
  
  .center-buttons {
    display: flex;
    margin-top: 10px;
    margin-left: 20px;
  }
  
  .modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%;
    background-color: rgba(0, 0, 0, 0.7);
    /* 半透明の背景色 */
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  
  .header-cell {
    background-color: #4397AB !important;
    /* ヘッダーの背景色を変更 */
    color: #fff;
    /* ヘッダーのテキスト色を白に設定 */
  }
  
  .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
  }
  
  .holiday {
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(-50%, -50%);
    font-size: 14px;
    font-weight: bold;
    color: #000000;
  }</style>