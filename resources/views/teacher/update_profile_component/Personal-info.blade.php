<div id="Personal-info">
    <span class="text-[36px] font-semibold text-[#05264e] border-b-[2px] border-solid border-[#9e0a72]">Personal info</span>
    <h1 class="text-[20px] py-2 text-[#66789c]">Update your profile</h1>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="email" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">E-Mail</label>
            <input type="text" name="email" id="email" value="{{Auth::user()->email}}" readonly
                class="email form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('email')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Phone Number</label>
            <input type="text" name="phone" id="phone" value="{{Auth::user()->phone}}" readonly
                class="phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('phone')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="additional_phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Additional Phone Number</label>
            <input type="text" name="additional_phone" id="additional_phone" placeholder="Ex: 0175510111111" value="@if($data) {{$data->additional_phone}} @endif"
                class="additional_phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('additional_phone')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="name" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Name</label>
            <input type="text" name="name" id="name" placeholder="Ex: Setu kanti dey" value="@if($data) {{$data->name}} @endif"
                class="name form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('name')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="gender" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Gender</label>
            <select name="gender" id="gender"
                    class="gender form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                    <option selected disabled>Select Gender</option>
                    <option value="Male" @if($data && $data->gender == 'Male') selected @endif>Male</option>
                    <option value="Female" @if($data && $data->gender == 'Female') selected @endif>Female</option>                    
            </select>
            @error('gender')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="flex items-center space-x-2 text-[#05264e] text-[24px] font-bold">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
        <h1> Your Current Location</h1>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="district" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Current City</label>
            <select name="district" id="district" onclick="upazila()"
                    class="district form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                    
            </select>
            @error('district')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="area" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Current Area</label>
            <select name="area" id="area"
                    class="area form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                    
            </select>
            @error('area')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="flex items-center space-x-2 text-[#05264e] text-[24px] font-bold">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
        <h1>Your Permanent Location</h1>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="permanent_location" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Permanent Location</label>
            <textarea name="permanent_location" id="permanent_location" rows="3" class="permanent_location form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]" placeholder="Ex: University Hall, Gopalganj Sador, Gopalganj-8100">@if($data){{ $data->permanent_location }}@endif</textarea>
            @error('permanent_location')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="space-x-2 text-[#05264e] text-[24px] font-bold">
        <h1>Parental Info</h1>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="father_name" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Father's Name</label>
            <input type="text" name="father_name" id="father_name" value="@if($data) {{$data->father_name}} @endif"
                class="father_name form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('father_name')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="father_phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Father's Phone Number</label>
            <input type="text" name="father_phone" id="father_phone" value="@if($data) {{$data->father_phone}} @endif" 
                class="father_phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('father_phone')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="mother_name" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Mother's Name</label>
            <input type="text" name="mother_name" id="mother_name" value="@if($data) {{$data->mother_name}} @endif"
                class="mother_name form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('mother_name')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="mother_phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Mother's Phone Number</label>
            <input type="text" name="mother_phone" id="mother_phone" value="@if($data) {{$data->mother_phone}} @endif" 
                class="mother_phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('mother_phone')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
    </div>
</div>
<div class="shadow-xl border border-solid border-gray-300 p-4 my-4">
    <div class="flex items-center space-x-2 text-[#05264e] text-[24px] font-bold">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
        <h1>Extra Info</h1>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="guardian_phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Local Guardian Number (On Emergency)</label>
            <input type="text" name="guardian_phone" id="guardian_phone" value="@if($data) {{$data->guardian_phone}} @endif"
                class="guardian_phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('guardian_phone')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
        <div class="flex flex-col w-[100%] py-2">
            <label for="guardian_relationship" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Guardian Relationship</label>
            <input type="text" name="guardian_relationship" id="guardian_relationship" value="@if($data) {{$data->guardian_relationship}} @endif" 
                class="guardian_relationship form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                @error('guardian_relationship')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
        </div>
    </div>
    <div class="flex lg:flex-row flex-col justify-between lg:space-x-4">
        <div class="flex flex-col w-[100%] py-2">
            <label for="yourself" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">About Yourself</label>
            <textarea name="yourself" id="yourself" rows="2" class="yourself form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">@if($data){{ $data->yourself }}@endif</textarea>
            @error('yourself')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="flex flex-col w-[100%] py-2">
        <label for="image" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Your Image</label>
        <input type="file" name="image" id="image" value="@if($data){{ $data->image }}@endif"
            class="image form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
            @error('image')
                <small class="text-danger text-yellow-400">{{ $message }}</small>
            @enderror
    </div>
</div>
