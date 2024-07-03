<div 
  wire:ignore
  x-data 
  x-init="
  FilePond.registerPlugin(FilePondPluginImagePreview);
  FilePond.setOptions({
    allowMultiple: true,
    maxFiles: 3,
    allowImagePreview: true,
    imagePreviewHeight: 100,
    server: {
        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('files', file, load, error, progress)
        },
      },
    });
  
  FilePond.create($refs.input);
  "
>

  <input type="file" x-ref="input"/>
</div>
