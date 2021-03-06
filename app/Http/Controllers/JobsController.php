<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use App\Models\Company;
use App\Models\Jobs;
use function Sodium\compare;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobs::all();
        return
            response()
                ->view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return response()
            ->view('jobs.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreJobsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsRequest $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'company_id' => 'required',
            'user_id'=> 'required'
        ]);
        Jobs::create($formFields);
        $company = Company::find($request['company_id']);

        return response()
            ->view('companies.show', compact('company'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        return response()
            ->view('jobs.show', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        return response()
            ->view('jobs.edit', compact('jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateJobsRequest $request
     * @param \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsRequest $request, Jobs $jobs)
    {
        if (auth()->user()->can('update', $jobs)) {
            $formFields = $request->validate([
                'name' => 'required',
                'description' => 'required',
                ]);

            $jobs->update($formFields);

            return response()
                ->view('jobs.show',compact('jobs'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Jobs $jobs
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Jobs $jobs)
    {
        if (auth()->user()->can('delete', $jobs)) {
            $jobs->delete();
        }
        return redirect('/companies');
    }
}
