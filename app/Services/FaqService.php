<?php  namespace App\Services; use App\Models\Faq;use App\Repositories\FaqRepository; class FaqService {  private FaqRepository $faqRepository;public function __construct(FaqRepository $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }public function create(array $data){return $this->faqRepository->create($data);
}public function update(Faq $faq, array $data){return $this->faqRepository->update( $faq, $data);
}public function findAll()
    {
        return $this->faqRepository->all();
    }public function findOne(int $id)
    {
        return $this->faqRepository->find($id);
    }public function delete(int $id)
    {
        return $this->faqRepository->delete($id);
    }  }