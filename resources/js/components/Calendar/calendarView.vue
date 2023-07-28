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
                        <td>{{ femaleCount }}<br>people</td>
                        <th>child</th>
                        <td>{{ childCount }}<br>people</td>
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

      // moment.jsを使って日付を変換
      const formattedDate = moment(dayDate, 'DD').format('YYYY-MM-DD');

      // 選択された日付を表示
      this.selectedDate = dayDate;

      try {
        // 日付が一致するデータをサーバーから取得
        const response = await axios.get('/api/v1/calendar', {
          params: {
            visitDate: formattedDate
          }
        });
        this.visitDateData = response.data.datas.filter(data => {
          const dataDate = new Date(data.visit_date);
          return dataDate.toDateString() === new Date(formattedDate).toDateString();
        });

        // フィルタリングしたデータを元にMale、Female、Childのカウントを行う
        let maleCount = 0;
        let femaleCount = 0;
        let childCount = 0;

        this.visitDateData.forEach(data => {
          if (data.sex === "Male") {
            maleCount++;
          } else if (data.sex === "Female") {
            femaleCount++;
          }

          // データベースから取得したbirthDateと現在の日付から年齢を計算
          const birthDate = new Date(data.birthdate);
          const ageDiffMs = Date.now() - birthDate.getTime();
          const ageDate = new Date(ageDiffMs); // ageDate will be a date starting from the epoch (1970-01-01)
          const calculatedAge = Math.abs(ageDate.getUTCFullYear() - 1970); // Calculate the age

          // 年齢が13未満の場合、childCountをインクリメント
          if (calculatedAge < 13) {
            childCount++;
          }
        });

        // カウントした結果を data にセット
        this.maleCount = maleCount;
        this.femaleCount = femaleCount;
        this.childCount = childCount;

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