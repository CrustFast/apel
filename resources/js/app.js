import './bootstrap';
import 'preline';
import 'flowbite';
import flatpickr from "flatpickr";
import Datepicker from 'flowbite-datepicker/Datepicker';
import { FilePond, registerPlugin } from 'filepond';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

{/* <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> */}

// Register the plugins
registerPlugin(
  FilePondPluginFileEncode,
  FilePondPluginFileValidateSize,
  FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview
);

// Turn all file input elements into ponds
FilePond.parse(document.body);



