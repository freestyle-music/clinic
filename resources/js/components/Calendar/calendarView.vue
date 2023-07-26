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
                        <h2>As of {{ getMonthName(currentDate) }} {{ getYearName(currentDate) }}</h2>
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

                <div class="calendar-grid">
                    <div class="calendar-weekly">
                        <div class="calendar-youbi" v-for="n in 7" :key="n">{{ youbi(n-1) }}</div>
                    </div>
                </div>
                    <!-- <div class="calendar-grid">
                        <div>日</div>
                        <div>月</div>
                        <div>火</div>
                        <div>水</div>
                        <div>木</div>
                        <div>金</div>
                        <div>土</div>
                    </div> -->
                    <div class="calendar-warp">
                        <div v-for="(week, index) in calendars" :key="index" class="v-calendar-weekly__week" style="display:flex;border-left:1px solid gray;border-top:1px solid gray">
                            <div class="calendar-daily" :class="[{outside: currentMonth !== day.month}, getCellClasses(day)]" v-for="(day, index) in week" :key="index" style="flex:1;min-height:125px; padding: 10px 0 0 10px; border-right:1px solid gray; border-bottom:1px solid gray">
                                <div class="day"><p>{{ day.day }}</p></div> 
                                <div class="calendar-day">
                                    <div class="holiday">holiday</div>
                                    <div class="view day-btn"><button><a href="./calendarView.vue">View</a></button></div>
                                    <div class="details day-btn"><button><a href="">Details</a></button></div>
                                </div>
                            </div>
                        </div>    
                    </div>
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
            components: { Header, pagination },
            directives: { print },
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
            this.currentDate = moment().startOf("month");
        },
        nextMonth() {
            this.currentDate = moment(this.currentDate).add(1, "month");
        },
        prevMonth() {
            this.currentDate = moment(this.currentDate).subtract(1, "month");
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
        // const currentDate = new Date();
        // const currentMonth = currentDate.getMonth() + 1; // 月は0から始まるため、+1を追加
        // console.log(currentMonth); // 現在の月を表示
    }
    // components: {Header, pagination, calender},
    // directives: { print },
    ,
    components: { Header }
}

</script>

