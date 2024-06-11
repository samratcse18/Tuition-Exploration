<div id="Educational-info">
    <span class="text-[36px] font-semibold text-[#05264e] border-b-[2px] border-solid border-[#9e0a72]">Educational Info</span>
    <h1 class="text-[20px] py-2 text-[#66789c]">Update your profile</h1>
</div>
{{-- Secondary / SSC / O-level / Dakhil --}}
<div class="shadow-xl border border-solid border-gray-300 py-4">
    <h6 class="text-[20px] text-center font-semibold text-[#05264e]">Secondary / SSC / O-level / Dakhil</h6>
    <div class="lg:px-[200px] px-[20px]">
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="ssc_institute" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Institute</label>
            <input type="text" name="ssc_institute" id="ssc_institute" placeholder="ex: Saint Joseph Higher Secondary School" value="@if($data) {{$data->ssc_institute}} @endif"
                class="ssc_institute form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="ssc_curriculam" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Curriculum</label>
            <select name="ssc_curriculam" id="ssc_curriculam"
                    class="ssc_curriculam form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="Bangla Version" @if($data) @if($data->ssc_curriculam == 'Bangla Version') selected @endif @endif>Bangla Version</option>
                            <option value="English Version" @if($data) @if($data->ssc_curriculam == 'English Version') selected @endif @endif>English Version</option>
                            <option value="Ed-Excel" @if($data) @if($data->ssc_curriculam == 'Ed-Excel') selected @endif @endif>Ed-Excel</option>
                            <option value="Cambridge" @if($data) @if($data->ssc_curriculam == 'Cambridge') selected @endif @endif>Cambridge</option>
                            <option value="IB" @if($data) @if($data->ssc_curriculam == 'IB') selected @endif @endif>IB</option>
                            <option value="Madrasa" @if($data) @if($data->ssc_curriculam == 'Madrasa') selected @endif @endif>Madrasa</option>
                            <option value="Vocational" @if($data) @if($data->ssc_curriculam == 'Vocational') selected @endif @endif>Vocational</option>
                            <option value="Others" @if($data) @if($data->ssc_curriculam == 'Others') selected @endif @endif>Others</option>

            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="ssc_group" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Group</label>
            <select name="ssc_group" id="ssc_group" 
                    class="ssc_group form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="Science" @if($data) @if($data->ssc_group == 'Science') selected @endif @endif>Science</option>
                            <option value="Commerce" @if($data) @if($data->ssc_group == 'Commerce') selected @endif @endif>Commerce</option>
                            <option value="Arts" @if($data) @if($data->ssc_group == 'Arts') selected @endif @endif>Arts</option>    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="ssc_year" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Passing Year</label>
            <select name="ssc_year" id="ssc_year" 
                    class="ssc_year form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option value="2024" @if($data) @if($data->ssc_year == '2024') selected @endif @endif>2024</option>
                        <option value="2023" @if($data) @if($data->ssc_year == '2023') selected @endif @endif>2023</option>
                        <option value="2022" @if($data) @if($data->ssc_year == '2022') selected @endif @endif>2022</option>
                        <option value="2021" @if($data) @if($data->ssc_year == '2021') selected @endif @endif>2021</option>
                        <option value="2020" @if($data) @if($data->ssc_year == '2020') selected @endif @endif>2020</option>
                        <option value="2019" @if($data) @if($data->ssc_year == '2019') selected @endif @endif>2019</option>
                        <option value="2018" @if($data) @if($data->ssc_year == '2018') selected @endif @endif>2018</option>
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="ssc_gpa" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Result</label>
            <input type="text" name="ssc_gpa" id="ssc_gpa" placeholder="ex: 5.00" value="@if($data) {{$data->ssc_gpa}} @endif"
                class="ssc_gpa form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
    </div>
</div>
{{-- Higher Secondary / HSC / A level / Alim --}}
<div class="shadow-xl border border-solid border-gray-300 py-4 my-4">
    <h6 class="text-[20px] text-center font-semibold text-[#05264e]">Higher Secondary / HSC / A level / Alim</h6>
    <div class="lg:px-[200px] px-[20px]">
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="hsc_institute" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Institute</label>
            <input type="text" name="hsc_institute" id="hsc_institute" placeholder="ex: Notre Dame College, Dhaka"value="@if($data) {{$data->hsc_institute}} @endif" 
                class="hsc_institute form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="hsc_curriculam" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Curriculum</label>
            <select name="hsc_curriculam" id="hsc_curriculam" 
                    class="hsc_curriculam form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="Bangla Version" @if($data) @if($data->hsc_curriculam == 'Bangla Version') selected @endif @endif>Bangla Version</option>
                            <option value="English Version" @if($data) @if($data->hsc_curriculam == 'English Version') selected @endif @endif>English Version</option>
                            <option value="Ed-Excel" @if($data) @if($data->hsc_curriculam == 'Ed-Excel') selected @endif @endif>Ed-Excel</option>
                            <option value="Cambridge" @if($data) @if($data->hsc_curriculam == 'Cambridge') selected @endif @endif>Cambridge</option>
                            <option value="IB" @if($data) @if($data->hsc_curriculam == 'IB') selected @endif @endif>IB</option>
                            <option value="Madrasa" @if($data) @if($data->hsc_curriculam == 'Madrasa') selected @endif @endif>Madrasa</option>
                            <option value="Vocational" @if($data) @if($data->hsc_curriculam == 'Vocational') selected @endif @endif>Vocational</option>
                            <option value="Others" @if($data) @if($data->hsc_curriculam == 'Others') selected @endif @endif>Others</option>
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="hsc_group" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Group</label>
            <select name="hsc_group" id="hsc_group" 
                    class="hsc_group form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="Science" @if($data) @if($data->ssc_group == 'Science') selected @endif @endif>Science</option>
                            <option value="Commerce" @if($data) @if($data->ssc_group == 'Commerce') selected @endif @endif>Commerce</option>
                            <option value="Arts" @if($data) @if($data->ssc_group == 'Arts') selected @endif @endif>Arts</option>    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="hsc_year" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Passing Year</label>
            <select name="hsc_year" id="hsc_year" 
                    class="hsc_year form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option value="2024" @if($data) @if($data->hsc_year == '2024') selected @endif @endif>2024</option>
                        <option value="2023" @if($data) @if($data->hsc_year == '2023') selected @endif @endif>2023</option>
                        <option value="2022" @if($data) @if($data->hsc_year == '2022') selected @endif @endif>2022</option>
                        <option value="2021" @if($data) @if($data->hsc_year == '2021') selected @endif @endif>2021</option>
                        <option value="2020" @if($data) @if($data->hsc_year == '2020') selected @endif @endif>2020</option>
                        <option value="2019" @if($data) @if($data->hsc_year == '2019') selected @endif @endif>2019</option>
                        <option value="2018" @if($data) @if($data->hsc_year == '2018') selected @endif @endif>2018</option>
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="hsc_gpa" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Result</label>
            <input type="text" name="hsc_gpa" id="hsc_gpa" placeholder="ex: 5.00" value="@if($data) {{$data->hsc_gpa}} @endif"
                class="hsc_gpa form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
    </div>
</div>
{{-- Graduation / Bachelor / Diploma --}}
<div class="shadow-xl border border-solid border-gray-300 py-4 my-4">
    <h6 class="text-[20px] text-center font-semibold text-[#05264e]">Graduation / Bachelor / Diploma</h6>
    <div class="lg:px-[200px] px-[20px]">
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_institute_type" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Institute Type</label>
            <select name="bachelor_institute_type" id="bachelor_institute_type" 
                    class="bachelor_institute_type form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="National University" @if($data) @if($data->bachelor_institute_type == 'National University') selected @endif @endif>National University</option>
                            <option value="Public University" @if($data) @if($data->bachelor_institute_type == 'Public University') selected @endif @endif>Public University</option>
                            <option value="Private University" @if($data) @if($data->bachelor_institute_type == 'Private University') selected @endif @endif>Private University</option>
                            <option value="7 College" @if($data) @if($data->bachelor_institute_type == '7 College') selected @endif @endif>7 College</option>
                            <option value="Public Medical" @if($data) @if($data->bachelor_institute_type == 'Public Medical') selected @endif @endif>Public Medical</option>
                            <option value="Private Medical College"@if($data) @if($data->bachelor_institute_type == 'Private Medical College') selected @endif @endif>Private Medical College</option>
                            <option value="Madrasha" @if($data) @if($data->bachelor_institute_type == 'Madrasha') selected @endif @endif>Madrasha</option>
                            <option value="Polytechnic Institute" @if($data) @if($data->bachelor_institute_type == 'Polytechnic Institute') selected @endif @endif>Polytechnic Institute</option>
                            <option value="Home Economics Under Dhaka University" @if($data) @if($data->bachelor_institute_type == 'Home Economics Under Dhaka University') selected @endif @endif>Home Economics Under Dhaka University</option>
                            <option value="Technology unit under Dhaka University" @if($data) @if($data->bachelor_institute_type == 'Technology unit under Dhaka University') selected @endif @endif>Technology unit under Dhaka University</option>
                            <option value="Bangladesh Nursing and Midwifery Council" @if($data) @if($data->bachelor_institute_type == 'Bangladesh Nursing and Midwifery Council') selected @endif @endif>Bangladesh Nursing and Midwifery Council</option>
                            <option value="Affiliated Colleges of BUTEX" @if($data) @if($data->bachelor_institute_type == 'Affiliated Colleges of BUTEX') selected @endif @endif>Affiliated Colleges of BUTEX</option>
                       
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_institute" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Institute</label>
            <input type="text" name="bachelor_institute" id="bachelor_institute" placeholder="ex: Bangabandhu Sheikh Mujibur Rahman Science and Technology University" value="@if($data) {{$data->bachelor_institute}} @endif" 
                class="bachelor_institute form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_study_type" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Study Type</label>
            <select name="bachelor_study_type" id="bachelor_study_type" 
                    class="bachelor_study_type form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="BA" @if($data) @if($data->bachelor_study_type == 'BA') selected @endif @endif>BA</option>
                            <option value="BBA" @if($data) @if($data->bachelor_study_type == 'BBA') selected @endif @endif>BBA</option>
                            <option value="BSC" @if($data) @if($data->bachelor_study_type == 'BSC') selected @endif @endif>BSC</option>
                            <option value="BSS" @if($data) @if($data->bachelor_study_type == 'BSS') selected @endif @endif>BSS</option>
                            <option value="Degree" @if($data) @if($data->bachelor_study_type == 'Degree') selected @endif @endif>Degree</option>
                            <option value="Diploma Engineering" @if($data) @if($data->bachelor_study_type == 'Diploma Engineering') selected @endif @endif>Diploma Engineering</option>
                            <option value="Fazil" @if($data) @if($data->bachelor_study_type == 'Fazil') selected @endif @endif>Fazil</option>
                            <option value="Kamil" @if($data) @if($data->bachelor_study_type == 'Kamil') selected @endif @endif>Kamil</option>
                            <option value="MA" @if($data) @if($data->bachelor_study_type == 'MA') selected @endif @endif>MA</option>
                            <option value="Mawlana" @if($data) @if($data->bachelor_study_type == 'Mawlana') selected @endif @endif>Mawlana</option>
                            <option value="MBA" @if($data) @if($data->bachelor_study_type == 'MBA') selected @endif @endif>MBA</option>
                            <option value="Medical" @if($data) @if($data->bachelor_study_type == 'Medical') selected @endif @endif>Medical</option>
                            <option value="MSC" @if($data) @if($data->bachelor_study_type == 'MSC') selected @endif @endif>MSC</option>
                            <option value="MSS" @if($data) @if($data->bachelor_study_type == 'MSS') selected @endif @endif>MSS</option>
                            <option value="BFA" @if($data) @if($data->bachelor_study_type == 'BFA') selected @endif @endif>BFA</option>
                            <option value="B.Ed" @if($data) @if($data->bachelor_study_type == 'B.Ed') selected @endif @endif>B.Ed</option>
                            <option value="LLB" @if($data) @if($data->bachelor_study_type == 'LLB') selected @endif @endif>LLB</option>
                            <option value="Bachelor of Science" @if($data) @if($data->bachelor_study_type == 'Bachelor of Science') selected @endif @endif>Bachelor of Science</option>
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_department" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Departments</label>
            <input type="text" name="bachelor_department" id="bachelor_department" placeholder="ex: Computer Science and Engineering" value="@if($data) {{$data->bachelor_department}} @endif"
                class="bachelor_department form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_curriculam" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Curriculum</label>
            <select name="bachelor_curriculam" id="bachelor_curriculam"
                    class="bachelor_curriculam form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                        <option selected disabled>Select One</option>
                            <option value="Bangla Version" @if($data) @if($data->bachelor_curriculam == 'Bangla Version') selected @endif @endif>Bangla Version</option>
                            <option value="English Version" @if($data) @if($data->bachelor_curriculam == 'English Version') selected @endif @endif>English Version</option>
                            <option value="Ed-Excel" @if($data) @if($data->bachelor_curriculam == 'Ed-Excel') selected @endif @endif>Ed-Excel</option>
                            <option value="Cambridge" @if($data) @if($data->bachelor_curriculam == 'Cambridge') selected @endif @endif>Cambridge</option>
                            <option value="IB" @if($data) @if($data->bachelor_curriculam == 'IB') selected @endif @endif>IB</option>
                       
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_year" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">Passing Year/ Semester/ Year* (If has)</label>
            <select name="bachelor_year" id="bachelor_year" 
                    class="bachelor_year form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
                    
                        <option value="First Year" @if($data) @if($data->bachelor_year == 'First Year') selected @endif @endif>First Year</option>
                        <option value="Second Year" @if($data) @if($data->bachelor_year == 'Second Year') selected @endif @endif>Second Year</option>
                        <option value="Third Year" @if($data) @if($data->bachelor_year == 'Third Year') selected @endif @endif>Third Year</option>
                        <option value="Fourth Year" @if($data) @if($data->bachelor_year == 'Fourth Year') selected @endif @endif>Fourth Year</option>
                        <option value="Fifth Year" @if($data) @if($data->bachelor_year == 'Fifth Year') selected @endif @endif>Fifth Year</option>
                        <option value="Graduation Complete" @if($data) @if($data->bachelor_year == 'Graduation Complete') selected @endif @endif>Graduation Completed</option>
                        <option value="2024" @if($data) @if($data->bachelor_year == '2024') selected @endif @endif>2024</option>
                        <option value="2023" @if($data) @if($data->bachelor_year == '2023') selected @endif @endif>2023</option>
                        <option value="2022" @if($data) @if($data->bachelor_year == '2022') selected @endif @endif>2022</option>
                        <option value="2021" @if($data) @if($data->bachelor_year == '2021') selected @endif @endif>2021</option>
                        <option value="2020" @if($data) @if($data->bachelor_year == '2020') selected @endif @endif>2020</option>
                        <option value="2019" @if($data) @if($data->bachelor_year == '2019') selected @endif @endif>2019</option>
                        <option value="2018" @if($data) @if($data->bachelor_year == '2018') selected @endif @endif>2018</option>
                   
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="bachelor_gpa" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[20%] w-[100%]">CGPA / Current CGPA</label>
            <input type="text" name="bachelor_gpa" id="bachelor_gpa" placeholder="ex: 5.00" value="@if($data) {{$data->bachelor_gpa}} @endif"
                class="bachelor_gpa form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[80%] w-[100%]">
        </div>
    </div>
</div>
