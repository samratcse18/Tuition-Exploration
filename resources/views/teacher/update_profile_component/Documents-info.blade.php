<div id="Documents-info">
    <span class="text-[36px] font-semibold text-[#05264e] border-b-[2px] border-solid border-[#9e0a72]">My Documents</span>
    <h1 class="text-[20px] py-2 text-[#66789c]">Update your profile</h1>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="flex items-center space-x-2 text-[#05264e] text-[24px] font-bold">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
        <h1>Upload Documents</h1>
    </div>
    <div class="flex flex-col">
        <div class="flex flex-col w-[100%] py-2">
            <label for="document_title" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Document</label>
            <select name="document_title" id="document_title"
                    class="document_title form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                    <option selected disabled>Select document</option>
                    @foreach(['NID/ Passport/ Birth Certificate', 'University ID/ Certificate', 'SSC/ O Level Marksheets/ Certificate', 'HSC/ A Level Marksheets/ Certificate'] as $document)
                        <option value="{{ $document }}" @if($data && $data->document_title == $document) selected @endif>{{ $document }}</option>
                    @endforeach
            </select>
            @error('document_title')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="file" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">File</label>
            <input type="file" name="file" id="file" value="@if($data){{ $data->file }}@endif"
                class="file form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('file')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
    </div>
</div>
