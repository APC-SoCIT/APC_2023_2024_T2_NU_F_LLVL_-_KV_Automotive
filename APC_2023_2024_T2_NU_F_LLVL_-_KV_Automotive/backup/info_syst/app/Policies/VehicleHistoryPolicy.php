<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VehicleHistory;
use Illuminate\Auth\Access\HandlesAuthorization;

class VehicleHistoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_vehicle::history');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function view(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('view_vehicle::history');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_vehicle::history');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function update(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('update_vehicle::history');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function delete(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('delete_vehicle::history');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_vehicle::history');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function forceDelete(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('force_delete_vehicle::history');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_vehicle::history');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function restore(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('restore_vehicle::history');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_vehicle::history');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VehicleHistory  $vehicleHistory
     * @return bool
     */
    public function replicate(User $user, VehicleHistory $vehicleHistory): bool
    {
        return $user->can('replicate_vehicle::history');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_vehicle::history');
    }

}
