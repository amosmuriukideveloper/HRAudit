<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonalDetailRequest;
use App\Http\Requests\UpdatePersonalDetailRequest;
use App\Models\ApprovingSignatory;
use App\Models\Certificate;
use App\Models\ChangeType;
use App\Models\Course;
use App\Models\Department;
use App\Models\DisabilityStatus;
use App\Models\EmployeeCertificate;
use App\Models\EmployeeWorkExperience;
use App\Models\EmploymentChange;
use App\Models\EmploymentDetail;
use App\Models\EmploymentTerm;
use App\Models\Ethnicity;
use App\Models\Institution;
use App\Models\JobGrade;
use App\Models\JobTitle;
use App\Models\OtherCertificate;
use App\Models\Payslip;
use App\Models\PersonalDetail;
use App\Models\Position;
use App\Models\ProbationStatus;
use App\Models\ProfessionalCertificate;
use App\Models\Relationship;
use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalDetails = PersonalDetail::with('ethnicity')->get();
        return view('biodata.index', compact('personalDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
       
       
        $ethnicities = Ethnicity::all();
        return view('forms.create', compact('ethnicities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonalDetailRequest $request)
    {
        
        $disabilityStatuses = DisabilityStatus::all();
        $ethnicities = Ethnicity::all();
        
        $request->validated();
        $personalDetail = new PersonalDetail;
        $personalDetail->name = $request->name;
        $personalDetail->payroll_number = $request->payroll_number;
        $personalDetail->id_no = $request->id_no;
        $personalDetail->age = $request->age;
        $personalDetail->gender = $request->gender;
        $personalDetail->disability_status = $request->disability_status;
        $personalDetail->passport_photo = $request->passport_photo;
        $personalDetail->tel_mobile = $request->tel_mobile;
        $personalDetail->ethnicity = $request->ethnicity;
        $personalDetail->save();

        return redirect()->route('employment.details.next', $personalDetail->id)->with('success', 'Personal Details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $personalDetail = PersonalDetail::where('id','=',$id)->firstOrFail();

        return view('personalDetails.show', compact('personalDetail'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $personalDetail = PersonalDetail::where('id','=',$id)->firstOrFail();
        $employmentDetail = EmploymentDetail::where('personal_detail_id','=',$id)->first();
        $employmentChanges = EmploymentChange::where('personal_detail_id',$id)->first();
        $payslip = Payslip::where('personal_detail_id',$id)->first();
        $disabilityStatuses = DisabilityStatus::all();
        $ethnicities = Ethnicity::all();
        $departments = Department::all();
        $positions = Position::all();
        $employmentTerms = EmploymentTerm::all();
        $probations = ProbationStatus::all();
        $jobGrades = JobGrade::all();
        $jobTitles = JobTitle::all();
        $relationships = Relationship::all();
        $institutions = Institution::all();
        $courses = Course::all();
        $certificates = Certificate::all();
        $employment_work_experience = EmployeeWorkExperience::all();
        $employeeCertificates = EmployeeCertificate::all();
        $approvingSignatories = ApprovingSignatory::all();
        $employmentTerms = EmploymentTerm::all();
        $professional_certificates = ProfessionalCertificate::all();
        $other_certificates = OtherCertificate::all();
           return view('biodata.edit', compact('personalDetail', 'employmentDetail', 'employmentChanges', 'disabilityStatuses', 'ethnicities', 'departments', 'positions', 'employmentTerms', 'probations', 'jobGrades', 'jobTitles', 'relationships', 'institutions', 'courses', 'certificates', 'approvingSignatories', 'employmentTerms', 'payslip', 'employeeCertificates', 'employment_work_experience', 'professional_certificates', 'other_certificates'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalDetailRequest $request, $id)
    {
        $validated = $request->validated();
        $personalDetail =  PersonalDetail::where('id','=',$id)->first();
     
        $personalDetail->update($validated);
        return redirect()->route('personal.details.edit', $id)
                         ->with('success','Personal Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetail $personalDetail)
    {
        $personalDetail->delete();

        return redirect()->route('personalDetail.index')
                        ->with('success','PersonalDetails deleted successfully');
    }

    public function generateReport()
{
    $personalDetails = PersonalDetail::with('employmentDetails', 'employmentChanges', 'payslip')->get();

    return view('forms.report', compact('personalDetails'));
}
}
