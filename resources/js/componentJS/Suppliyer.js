import { ref, reactive, watch, computed, onMounted } from "vue";
import axios from "axios";
import moment from "moment";
// import readXlsxFile from "read-excel-file";
// import * as XLSX from "xlsx/xlsx.mjs";
export default function useSuppliyer() {
    const suppliyers = ref([]);
    const search = ref('');
    const errors = ref('');
    const msg = ref('')
    const company = ref([]);
    const dateobj = new Date();
    const newdate = dateobj.toISOString().split('T')[0];

    const message = ref('')
    const photo_path = ref('')
    const form = reactive({
        id: "",
        sup_code: "",
        sup_name: "",
        sup_name_2: "",
        image_url: "",
        address: "",
        phone_no: "",
        phone_no_2: "",
        fax_no: "",
        email: "",
        contact_name: "",
        contact_phone: "",
        status: "",
        inactived: "Yes",
        created_by: "",
        updated_by: "",
        
    })
    onMounted(() => {
        getSuppliyer();
        getcompany();
    })
    watch(search, () => {
        getSuppliyer();
    })
    const getSuppliyer = async (p = 1) => {
        axios.get('api/v1/suppliyers?page=' + p, { params: { search: search.value } }).then(({ data }) => {
            suppliyers.value = data
        })

    }
    const getcompany = async () => {
        axios.get("/api/v1/getSetup/")
            .then(({ data }) => {
                company.value = data;
            });
    }
    const saveSup = async (form) => {
        axios.post('api/v1/suppliyers/store/', form).then(() => {
            message.value = 'Success'
            msg.value = 'Please input your Image'
        }).catch((error) => {
            errors.value = error.response.data.errors;
            setTimeout(() => errors.value = false, 2000);
          });

    }
    const updateSup = async (x, form) => {
        axios.post('api/v1/suppliyers/update/' + x, form)
    }
    const supImage = async (e) => {
        const image = e.target.files[0];
        const reader = new FileReader();
        reader.readAsDataURL(image);
        reader.onload = (e) => {
            (photo_path.value = ""), (form.image_url = e.target.result);
        };
    }
    const deleteSup = async (id) => {
        axios.post("api/v1/suppliyers/delete/" + id)
    }
    
    const messageAlert = async () => {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        setTimeout(() => (modal.style.display = "none"), 2000);
    }
    return {
        form,
        suppliyers,
        search,
        company,
        newdate,
        getSuppliyer,
        getcompany,
        saveSup,
        updateSup,
        supImage,
        photo_path,
        deleteSup,
        msg,
        message,
        messageAlert,
        errors,
    }
}