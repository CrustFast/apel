import './bootstrap';
import 'preline';
import 'flowbite';
import flatpickr from "flatpickr";
import Datepicker from 'flowbite-datepicker/Datepicker';
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import Swal from 'sweetalert2';
import DataTable from 'datatables.net-dt';
// import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'
// import 'datatables.net-responsive-dt';

// Livewire.start()

window.Swal = Swal;

// Register the plugins
FilePond.registerPlugin(
  FilePondPluginFileEncode,
  FilePondPluginFileValidateSize,
  FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview
);

// Turn all file input elements into ponds
FilePond.parse(document.body);

let table = new DataTable('#myTable', {
  responsive: true
});

