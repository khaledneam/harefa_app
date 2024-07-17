<?php

namespace Modules\Dawry\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Dawry\Requests\StoreDawryRequest;
use Modules\Dawry\Requests\UpdateDawryRequest;
use Modules\Dawry\Services\DawryService;

class DawryController extends Controller
{

    private $dawryService;

    public function __construct(DawryService $dawryService)
    {
        $this->dawryService = $dawryService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->dawryService->index();
        }else{
            return view('Dawry::index');
        }

    }

    public function create()
    {
        return view('Dawry::create');
    }

    public function store(StoreDawryRequest $request)
    {
        $data = $request->except('_token');

        $this->dawryService->store($data);

        return redirect()->back()->with('success', 'Dawry added successfully');

    }

    public function edit($id)
    {
        $record = $this->dawryService->find($id);
        return view('Dawry::update', compact('record'));

    }

    public function update(UpdateDawryRequest $request ,$id)
    {
        $data = $request->except('_token');
        $data['id'] = $id;

        $this->dawryService->update($data);
        return redirect()->route('dawry.index')->with('success', 'Dawry updated successfully');
    }

    public function destroy($id)
    {
        $this->dawryService->destroy($id);
        return redirect()->route('dawry.index')->with('success', 'Dawry deleted successfully');
    }

}
