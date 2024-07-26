<?php

namespace Modules\Challenge\Services;

use Modules\Challenge\Repositries\ChallengeRepositry;

class ChallengeService
{

    private $challengeRepository;

    public function __construct(ChallengeRepositry $challengeRepositry)
    {
        $this->challengeRepository = $challengeRepositry;
    }

    public function index()
    {
        return $this->challengeRepository->index();
    }

    public function find($id)
    {
        return $this->challengeRepository->find($id);
    }


}
