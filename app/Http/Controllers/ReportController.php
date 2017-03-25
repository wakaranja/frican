<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \Input as Input;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reports = Report::where('published_status',1)->orderBy('created_at','desc')->paginate(6);
        return view('reports.reports',['reports'=>$reports]);
    }

    public function dashboard_reports()
    {
        //
        $reports = Report::orderBy('created_at','desc')->paginate(10);
        return view('reports.dashboard_reports',['reports'=>$reports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reports.newreport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //
        // $this->validate($request,[
        //   'title'=>'required',
        // ]);

        // $report = Report::create($request->all());
        

        $this->validate($request,[
           'title'=>'required',
         ]);

        $report = new Report;

        $report->title = $request['title'];
        $report->excerpt = $request['excerpt'];
        
        if(Input::hasFile('pdf_link')){
          $file = Input::file('pdf_link');
          $pdf_link = $file->getClientOriginalName();
          $file->move('africapireports', $pdf_link);
          $report->pdf_link = $pdf_link;
        }

        if(Input::hasFile('featured_image')){
          $image = Input::file('featured_image');
          $featured_image = $image->getClientOriginalName();
          $image->move('africapireports', $featured_image);
          $report->featured_image = $featured_image;
        }

        
        $report->published_status = $request['published_status'];
        $report->leadreport = $request['leadreport'];
        $report->posted_by = $request['posted_by'];
        $report->category = $request['category'];

        $report->save();

        return redirect()->route('dashboard_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $report=Report::where('id',$id)->first();
        return view('reports.report',['report'=>$report]);
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $report = Report::find($id);
        return view('reports.edit_report',['report'=>$report]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $report = Report::find($id);

        $report->title = $request['title'];
        $report->excerpt = $request['excerpt'];

        if(Input::hasFile('pdf_link')){
          $file = Input::file('pdf_link');
          $pdf_link = $file->getClientOriginalName();
          $file->move('africapireports', $pdf_link);
          $report->pdf_link = $pdf_link;
        }

        $report->featured_image = $request['featured_image'];
        $report->posted_by = $request['posted_by'];
        $report->category = $request['category'];

        $report->update();

        return redirect()->route('dashboard_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
