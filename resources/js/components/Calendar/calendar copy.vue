<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
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
                <div class="calendar-box-title search-box-title">
                    <div class="calendar-header">
                    <!-- ボタンがクリックされる前は元のタイトルを表示 -->
                        <h2 v-if="showTitle">As of {{ getMonthName(currentDate) }} {{ getYearName(currentDate) }}</h2>
                    <!-- ボタンがクリックされた後は新しいタイトルを表示 -->
                        <h2 v-else>As of {{ displayedMonth }} {{ displayedYear }}</h2>
                        <div class="calendar-search">
                        <!-- 年のセレクトボックス -->
                            <select v-model="selectedYear" @change="updateCalendar">
                                <option v-for="year in years" :value="year">{{ year }}</option>
                            </select>
                        <!-- 月のセレクトボックス -->
                            <select v-model="selectedMonth" @change="updateCalendar">
                                <option v-for="month in months" :value="month">{{ month }}</option>
                            </select>
                            <button @click="searchCalendar">Search</button>
                        </div>
                        <div class="calendar-header_btn">
                            <button @click="prevYear">&lt;&lt;</button>
                            <button @click="prevMonth">&lt;</button>
                            <button class="btn-radius btn btn-sm" @click="thisMonth" style="color: #f8f5b4; margin-top: -2px">this</button>
                            <button @click="nextMonth">&gt;</button>
                            <button @click="nextYear">&gt;&gt;</button>
                        </div>
                    </div>
                </div>
               
                <input id="search" name="search" type="hidden" value="1">

                <div class="calendar-box-content">
                    <table class="calendar-grid">
                        <thead>
                            <tr class="calendar-weekly">
                                <th class="calendar-youbi" v-for="n in 7" :key="n">{{ youbi(n-1) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(week, index) in calendars" :key="index" class="v-calendar-weekly__week" style="display:flex;border-left:1px solid gray;border-top:1px solid gray">
                                <td v-for="(day, index) in week" :key="index" class="calendar-color" :class="{ outside: currentMonth !== day.month }" style="flex:1;min-height:125px; padding: 10px 0 0 10px; border-right:1px solid gray; border-bottom:1px solid gray">
                                    <div class="day"><p>{{ day.day }}</p></div>
                                    <div class="calendar-day">
                                        <div class="holiday">holiday</div>
                                        <div class="view day-btn"><button><a href="" @click="calendarView">View</a></button></div>
                                        <div class="details day-btn"><button><a href="">Details</a></button></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from "moment";
import pagination from "laravel-vue-pagination";
import Header from "../Header.vue";
export default {
    data() {
        return {
            currentDate: moment(),
            currentMonth: this.getCurrentMonth(),
            currentYear: new Date().getFullYear(),
            components: { Header, pagination },
            directives: { print },
            selectedYear: null,
            selectedMonth: null,
            years: [], // 適切な年の範囲を設定してください
            months: [], // 月の選択肢を設定してください
            showTitle: true,
        };
    },
    methods: {
        changeColor: function () {
        setTimeout(() => {
            const dayList = Array.from(this.$refs.calendar.$vnode.elm.getElementsByClassName('v-calendar-weekly__week'))
            dayList.map(el => {
            el.children[0].classList.add('sunday')
            el.children[6].classList.add('saturday')
            })
        }, 0)
        },
        getMonthName(date) {
            return moment(date).format('MMMM');
        },
        getYearName(date) {
            return moment(date).format('YYYY');
        },
        getCurrentMonth() {
            return new Date().getMonth() + 1;
        },
        getStartDate() {
            let date = moment(this.currentDate);
            date.startOf("month");
            const youbiNum = date.day();
            return date.subtract(youbiNum, "days");
        },
        getEndDate() {
            let date = moment(this.currentDate);
            date.endOf("month");
            const youbiNum = date.day();
            return date.add(6 - youbiNum, "days");
        },
        getMonthData() {
            const currentDate = new Date();
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth() + 1;
            console.log(month); // 現在の月を表示
        },
        thisMonth() {
            const currentDate = new Date();  // 現在の日付を取得
            this.selectedYear = currentDate.getFullYear();  // 年を設定
            this.selectedMonth = currentDate.getMonth() + 1;  // 月を設定
            this.updateCalendar();  // カレンダーを更新
        },
        nextMonth() {
            this.currentDate = moment(this.currentDate).add(1, "month");
        },
        nextYear() {
            this.currentDate = moment(this.currentDate).add(1, "year");
        },
        prevMonth() {
            this.currentDate = moment(this.currentDate).subtract(1, "month");
        },
        prevYear() {
            this.currentDate = moment(this.currentDate).subtract(1, "year");
        },

        youbi(dayIndex) {
            const week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            return week[dayIndex];
        },
        getCalendar() {
            let startDate = this.getStartDate();
            const endDate = this.getEndDate();
            const weekNumber = Math.ceil(endDate.diff(startDate, "days") / 7);
            let calendars = [];
            let calendarDate = this.getStartDate();

            for (let week = 0; week < weekNumber; week++) {
                let weekRow = [];
                for (let day = 0; day < 7; day++) {
                    weekRow.push({
                        day: calendarDate.get('date'),
                        month: calendarDate.format('YYYY-MM'),
                    });
                    calendarDate.add(1, "days");
                }
                calendars.push(weekRow);
            }
            return calendars;
        },
        searchCalendar() {
            // タイトルの表示フラグを切り替える
            this.showTitle = !this.showTitle;
                        // 選択された年と月の値を取得
            const selectedYear = this.selectedYear;
            const selectedMonth = this.selectedMonth;

            // 値の表示
            const currentDate = moment([selectedYear, selectedMonth - 1]);
            const monthName = currentDate.format("MMMM");
            const yearName = currentDate.format("YYYY");
            this.displayedMonth = monthName;
            this.displayedYear = yearName;

            // 選択された年と月に基づいてカレンダーデータを生成
            this.calendars = (selectedYear, selectedMonth);
            console.log(selectedYear, selectedMonth, monthName);
        },
    },
    computed: {
        calendars() {
            return this.getCalendar();
        },
        currentMonth(){
            return this.currentDate.format('YYYY-MM');
        },
    },
    mounted() {
        const startDate = this.getStartDate();
        const endDate = this.getEndDate();
        const weekNumber = Math.ceil(endDate.diff(startDate, "days") / 7);
        console.log(weekNumber); //5と表示される
        console.log(this.getStartDate());
        console.log(this.getEndDate());
        console.log(this.getCalendar());
        this.months = Array.from({ length: 12 }, (_, index) => index + 1);
        const startYear = 1990;
        const endYear = 2100;
        this.years = Array.from({ length: endYear - startYear + 1 }, (_, index) => startYear + index);
        // const currentDate = new Date();
        // const currentMonth = currentDate.getMonth() + 1; // 月は0から始まるため、+1を追加
        // console.log(currentMonth); // 現在の月を表示
    }
    // components: {Header, pagination, calender},
    // directives: { print },
    ,
    components: { Header }
}




// import axios from "axios";
// import pagination from "laravel-vue-pagination";
// import moment from "moment";
// import Header from "../Header.vue";
// import { ref } from "vue";
// import Calendar from './components/CalendarView.vue'
// import print from 'vue3-print-nb';
// export default {
//   components: { Header, pagination },
//   directives:{
//     print
//   },
//   data() {
//     return {
//       currentDate: moment(),
//       currentMonth: '', // 現在の月を保持する変数
//       calendarDays: [], // カレンダーの日にちを保持する配列
//     //   serails: [],
//     //   company: [],
//     //   formatdate: "",
//     //   checkbt: '',
//     //   perPage: "",
//     //   currentPage: 0,
//     //   last_page: 1,
//     //   action_api: "",
//     //   btcheck: 'Save',
//     //   action_api_1: "",
//     //   employee: [],
//     //   deleteid: '',
//     //   user: [],
//     //   error: "",
//     //   massege: "",
//     //   btnback:false,
//     //   object: {
//     //     id: '',
//     //     email: ' ',
//     //     firstname: ''
//     //   },
//     //   confirm_pass: '',
//     //   form: {
//     //     id: "",
//     //     lstname: "",
//     //     firstname: "",
//     //     birstdate: "",
//     //     sex: "Male",
//     //     phone1: "",
//     //     phone2: "",
//     //     email: "",
//     //     hiredate: "",
//     //     address: "",
//     //     address2: "",
//     //     village: "",
//     //     commune: "",
//     //     district: "",
//     //     pro_city: "",
//     //     region: "",
//     //     remark: "",
//     //     status: "",
//     //     created_by: "",
//     //     updete_by: "",
//     //   },
//     //   save_or_update: 'Save',

//     //   user_form: {
//     //     id: "",
//     //     user_code: "",
//     //     user_name: "",
//     //     password: "",
//     //     email: "",
//     //     role: "",
//     //     statue: "",
//     //     created_by: "",
//     //     delete_by: "",
//     //     created_at: "",
//     //     updated_at: "",
//     //   },
//     //   user_view: [],

//       mounted() {
//         console.log(this.getStartDate());
//         console.log(this.getEndDate());
//         this.getMonthData();
//         },
//         methods: {
//             getStartDate() {
//             let date = moment(this.currentDate);
//             date.startOf('month');
//             const youbiNum = date.day();
//             return date.subtract(youbiNum, 'days');
//         },
//         getEndDate() {
//             let date = moment(this.currentDate);
//             date.endOf('month');
//             const youbiNum = date.day();
//             return date.add(6 - youbiNum, 'days');
//         },
//         getMonthData() {
//         const currentDate = new Date();
//         const year = currentDate.getFullYear();
//         const month = currentDate.getMonth() + 1;

//         // 現在の年と月から現在の月の日数を取得
//         const daysInMonth = new Date(year, month, 0).getDate();

//         // 現在の年と月から最初の日の曜日を取得
//         const firstDayOfWeek = new Date(year, month - 1, 1).getDay();

//         // カレンダーの日にちを生成する
//         const days = [];
//         for (let i = 1; i <= daysInMonth; i++) {
//             days.push(i);
//         }

//         // 最初の日の曜日に応じて先頭に空白を追加する
//         for (let i = 0; i < firstDayOfWeek; i++) {
//             days.unshift('');
//         }

//         this.currentMonth = `${year}年${month}月`;
//         this.calendarDays = days;
//         },
//         previousMonth() {
//         // 前の月のデータを取得する処理
//         this.getMonthData();
//         },
//         nextMonth() {
//         // 次の月のデータを取得する処理
//         this.getMonthData();
//         },
//     },
//     };
// }};
</script>

