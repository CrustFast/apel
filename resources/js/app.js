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

window.Swal = Swal;
// window.preline = preline;

// Register the plugins
FilePond.registerPlugin(
  FilePondPluginFileEncode,
  FilePondPluginFileValidateSize,
  FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview
);

// Turn all file input elements into ponds
FilePond.parse(document.body);

