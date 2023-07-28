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
                        <td class="cal-tll">{{ selectedDate }}{{ getMonthName(displayedMonth) }} {{ displayedYear }}</td>
                        <td class="day-btn"><button><a href="#">Change Date</a></button></td>
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
    // Maleの13歳以上のカウントを返す関数
  getMaleCount() {
    return this.visitDateData.reduce((count, data) => {
      if (data.sex === "Male" && this.calculateAge(data.birthdate) >= 13) {
        count++;
      }
      return count;
    }, 0);
  },

  // Femaleの13歳以上のカウントを返す関数
  getFemaleCount() {
    return this.visitDateData.reduce((count, data) => {
      if (data.sex === "Female" && this.calculateAge(data.birthdate) >= 13) {
        count++;
      }
      return count;
    }, 0);
  },

  // 13歳未満のカウントを返す関数
  getChildCount() {
    return this.visitDateData.reduce((count, data) => {
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
      this.maleCount = this.getMaleCount();
      this.femaleCount = this.getFemaleCount();
      this.childCount = this.getChildCount();
    } catch (error) {
      console.error("Error in filterData:", error);
    }
  },

  // Maleの13歳以上のカウントを返す関数
  getMaleCount() {
    return this.visitDateData.reduce((count, data) => {
      if (data.sex === "Male" && this.calculateAge(data.birstdate) >= 13) {
        count++;
      }
      return count;
    }, 0);
  },

  // Femaleの13歳以上のカウントを返す関数
  getFemaleCount() {
    return this.visitDateData.reduce((count, data) => {
      if (data.sex === "Female" && this.calculateAge(data.birstdate) >= 13) {
        count++;
      }
      return count;
    }, 0);
  },

  // 13歳未満のカウントを返す関数
  getChildCount() {
    return this.visitDateData.reduce((count, data) => {
      if (this.calculateAge(data.birstdate) < 13) {
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