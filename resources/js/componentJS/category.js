import { ref, reactive, watch, computed, onMounted } from "vue";
import axios from "axios";
import moment from "moment";
import readXlsxFile from "read-excel-file";
import * as XLSX from "xlsx/xlsx.mjs";
export default function useCategory() {
    const Categories = ref([{}]);
    const errors = ref("");
    const search = ref("");
    const checkexcel = ref([]);
    const company = ref([]);
    const dateobj = new Date();
    const newdate = dateobj.toISOString().split("T")[0];
    const exefile = ref("");
    const excel = ref("Import");
    const form = reactive({
        cat_code: "",
        cat_name: "",
        cat_name_2: "",
        created_by: "",
        updated_by: "",
        inactived: "",
    });
    const CatExcels = reactive([
        {
            cat_code: "",
            cat_name: "",
            cat_name_2: "",
            inactived: "",
        },
    ]);
    onMounted(() => {
        getCategory();
        getcompany();
    });
    watch(search, () => {
        getCategory();
    });
    var getCategory = async (p = 1) => {
        axios
            .get("api/v1/category?page=" + p, {
                params: { search: search.value },
            })
            .then(({ data }) => {
                Categories.value = data;
            });
    };
    // const getcompany = async () => {
    //     axios.get("/api/v1/getSetup/").then(({ data }) => {
    //         company.value = data;
    //     });
    // };
    const createCategory = async (form) => {
        axios
            .post("api/v1/categorys/create", form)
            .then(() => {})
            .catch((error) => {
                errors.value = error.response.data.errors;
                setTimeout(() => (errors.value = false), 2000);
            });
    };
    const DeleteCategory = async (id) => {
        axios.post("api/v1/category/delete/" + id);
    };
    const updateCategory = async (x, form) => {
        axios.post("api/v1/categorys/updete/" + x, form);
    };
    const printCategory = async () => {
        var printContents = document.getElementById("purchaseorder").innerHTML;
        var mywindow;
        mywindow = window.open(
            "",
            "mydiv",
            "height=800,width=1200,scrollbars=yes",
            ""
        );
        mywindow.document.write("<html><head><title>my div</title>");
        mywindow.document.write('<link rel="stylesheet" href="css/style.css">');
        mywindow.document.write('<link rel="stylesheet" href="css/app.css">');
        mywindow.document.write(
            '<link rel="stylesheet" href="css/pstyle.css">'
        );
        mywindow.document.write("</head><body>");
        mywindow.document.write(printContents);
        mywindow.document.write("</body> </html>");
        setTimeout(() => {
            mywindow.document.close();
            mywindow.focus();
            mywindow.print();
            setTimeout(function () {
                window.close();
            }, 1);
            cb();
        }, 1000);
    };
    const dataexcelCategory = async (event) => {
        exefile.value = "";
        const xlsxfile = event.target.files ? event.target.files[0] : null;
        readXlsxFile(xlsxfile).then((rows) => {
            var x = 0;
            rows.forEach((element) => {
                if (x >= 0) {
                    if (x == 0) {
                        checkexcel.value = element;
                    } else {
                        if (
                            checkexcel.value[0] == "cat_code" &&
                            checkexcel.value[1] == "cat_name" &&
                            checkexcel.value[2] == "cat_name_2" &&
                            checkexcel.value[3] == "inactived"
                        ) {
                            CatExcels.push({
                                cat_code: element[0],
                                cat_name: element[1],
                                cat_name_2: element[2],
                                inactived: element[3],
                            });
                        } else {
                            exefile.value = " Fail Data";
                        }
                    }
                }
                x++;
            });
        });
        exefile.value = "";
    };
    const savexcelCategoy = async () => {
        var x = 0;
        CatExcels.forEach((e) => {
            if (x != 0) {
                axios.post("api/v1/category/excel", e).then((data) => {
                    CatExcels.values = data.data;
                    Categories.value = CatExcels.values;
                });
            }
            x++;
        });
    };
    const getcompany = async () => {
        axios.get("/api/v1/getSetup/")
          .then((response) => {
            company.value = response.data;
            dateformart.value = moment(new Date()).format('YYYY-MM-DD');
          });
      };
    return {
        Categories,
        form,
        search,
        CatExcels,
        checkexcel,
        exefile,
        excel,
        company,
        newdate,
        errors,
        getcompany,
        getCategory,
        createCategory,
        DeleteCategory,
        updateCategory,
        printCategory,
        dataexcelCategory,
        savexcelCategoy,
    };
}
