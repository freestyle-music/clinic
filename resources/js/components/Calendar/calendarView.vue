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
                        <th>Consultation</th>
                        <td>{{ selectedDate }}{{ getMonthName(displayedMonth) }} {{ displayedYear }}</td>
                        <td class="day-btn"><button><a href="#">Change Date</a></button></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Male</th>
                        <td>{{ maleCount }}<br>people</td>
                        <th>Female</th>
                        <td>{{ femaleCount }}people</td>
                        <th>child</th>
                        <td>{{ childCount }}people</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="search-box-footer">
                    <div class="day-btn">
                      <button>
                        <router-link to="/calendar"><a href="#">Back</a></router-link>
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
    };
  },
  created() {
    // dayDateを使ってデータを取得・表示する処理を行う
    const dayDate = this.$route.params.dayDate;
    this.selectedDate = dayDate;
    this.filterData();
  },
  methods: {
    async filterData() {
      // Vue Router のパラメータから日付情報を取得
      const dayDate = this.$route.params.dayDate;

      // 選択された日付を表示
      this.selectedDate = dayDate;

      try {
        // 日付が一致するデータをサーバーから取得
        const response = await axios.get('/api/v1/calendar', {
          params: {
            visitDate: dayDate
          }
        });
        this.visitDateData = response.data.datas;

        // フィルタリングしたデータを元にカウントを行う
        const maleCount = this.visitDateData.filter(data => data.sex === "Male").length;
        const femaleCount = this.visitDateData.filter(data => data.sex === "Female").length;
        const childCount = this.visitDateData.filter(data => data.age < 13).length;

        // カウントした結果を data にセット
        this.maleCount = maleCount;
        this.femaleCount = femaleCount;
        this.childCount = childCount;
      } catch (error) {
        console.error(error);
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
    getMonthName(month) {
      return moment().month(month - 1).format('MMMM');
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
    getMonthName(month) {
      return moment().month(month - 1).format('MMMM');
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
    this.selectedDate = this.$route.params.date;
    this.filterData();


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
