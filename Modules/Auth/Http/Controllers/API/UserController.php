<?php

namespace Modules\Auth\Http\Controllers\API;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Auth\Entities\User;
use Modules\Auth\Http\Requests\UserRequest;
use Modules\Auth\Repositories\UserRepository;
use Modules\Auth\Transformers\UserResource;
use Modules\Base\Traits\ApiTrait;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ApiTrait;

    /**
     * @var \Modules\Countries\Repositories\UserRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param \Modules\Countries\Repositories\UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = $this->repository->all();

        if (count($users) > 0) {
            $data = UserResource::collection($users)->response()->getData(true);
            return $this->sendResponse($data, 'success');
        }

        return $this->sendError('data not found');
    }


    /**
     * Store a newly created resource in storage.
     * @param UserRequest $request
     * @return Renderable
     */
    public function store(UserRequest $request)
    {
        $user = $this->repository->create($request->all());
        $data = new UserResource($user);
        return $this->sendResponse($data, __('auth::user.messages.created'));
    }

    /**
     * Show the specified resource.
     * @param int User $user
     * @return Renderable
     */
    public function show(User $user)
    {
        if ($user) {
            $user = $this->repository->find($user);

            $data = new UserResource($user);
            return $this->sendResponse($data, 'success');
        }

        return $this->sendError('Sorry not found');
    }


    /**
     * Update the specified resource in storage.
     * @param UserRequest $request
     * @param int User $user
     * @return Renderable
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $this->repository->update($user, $request->all());
        $data = new UserResource($user);
        return $this->sendResponse($data, __('auth::user.messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int User $user
     * @return Renderable
     */
    public function destroy(User $user)
    {
        $this->repository->delete($user);
        return $this->sendResponse(null, __('auth::user.messages.deleted'));
    }
}
