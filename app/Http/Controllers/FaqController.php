<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use Illuminate\Http\Request;

use App\Http\Resources\FaqJsonResource;
use App\Http\Resources\FaqResource;
use App\Models\Faq;
use App\Models\Vendedor;
use App\Services\FaqService;

class FaqController extends Controller {

    private FaqService $faqService;

    public function __construct(FaqService $faqService) {
        $this->faqService = $faqService;
    }

    public function indexApi(Request $request) {
        if ($request->isMethod("post")) {
            $faq = $this->faqService->findAll();
            return response()->json(new FaqResource($faq), 200);
        }
    }

    public function index() {
        $faq = $this->faqService->findAll();
        return view('faq.index', ['faq' => $faq]);
    }

    public function storeApi(StoreFaqRequest $request) {
        if ($request->isMethod("post")) {
            $faq = $this->faqService->create($request->validated());
            return response()->json(new FaqJsonResource($faq), 200);
        }
    }

    public function editApi(Faq $faq, StoreFaqRequest $request) {
        if ($request->isMethod("post")) {
            $faq = $this->faqService->update($faq, $request->validated());
            return response()->json(new FaqJsonResource($faq), 200);
        }
    }

    public function store(StoreFaqRequest $request) {
        if ($request->isMethod("post")) {
            $faq = $this->faqService->create($request->validated());
        }
        return view('faq.add');
    }

    public function edit(Faq $faq, StoreFaqRequest $request) {
        if ($request->isMethod("post")) {
            $faq = $this->faqService->update($faq, $request->validated());
        }
        return view('faq.edit', ['dados' => $faq]);
    }

    public function deleteApi(int $id) {
        if ($request->isMethod("post")) {
            $this->faqService->delete($id);
            return response()->json((true), 200);
        }
    }

    public function delete(int $id) {
        $this->faqService->delete($id);
        return redirect('/index');
    }

}
