@extends('admin.layouts.master')

@section('title', __('trans.create branch'))

@section('styles')

@endsection

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                {{ __('trans.create') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.branches.update', $branch -> id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label fs-14 text-dark">{{ __('trans.branch name') }}</label>
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="" value="{{ $branch -> name }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="display_name" class="form-label fs-14 text-dark">{{ __('trans.display name') }}</label>
                                    <div class="input-group">
                                        <input name="display_name" type="text" class="form-control" id="display_name" placeholder="" value="{{ $branch -> display_name }}">
                                    </div>
                                    @error('display_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label fs-14 text-dark">{{ __('trans.phone') }}</label>
                                    <div class="input-group">
                                        <input name="phone" class="form-control" id="phone" type="tel" placeholder="" value="{{ $branch -> phone }}">
                                    </div>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="building_number" class="form-label fs-14 text-dark">{{ __('trans.building number') }}</label>
                                    <div class="input-group">
                                        <input name="building_number" type="text" class="form-control" id="building_number" placeholder="" value="{{ $branch -> building_number }}">
                                    </div>
                                    @error('building_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="street_name" class="form-label fs-14 text-dark">{{ __('trans.street name') }}</label>
                                    <div class="input-group">
                                        <input name="street_name" type="text" class="form-control" id="street_name" placeholder="" value="{{ $branch -> street_name }}">
                                    </div>
                                    @error('street_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="district" class="form-label fs-14 text-dark">{{ __('trans.district') }}</label>
                                    <div class="input-group">
                                        <input name="district" type="text" class="form-control" id="district" placeholder="" value="{{ $branch -> district }}">
                                    </div>
                                    @error('district')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label fs-14 text-dark">{{ __('trans.city') }}</label>
                                    <div class="input-group">
                                        <input name="city" type="text" class="form-control" id="city" placeholder="" value="{{ $branch -> city }}">
                                    </div>
                                    @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label fs-14 text-dark">{{ __('trans.country') }}</label>
                                    <div class="input-group">
                                        <input name="country" type="text" class="form-control" id="country" placeholder="" value="{{ $branch -> country }}">
                                    </div>
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="postal_code" class="form-label fs-14 text-dark">{{ __('trans.postal code') }}</label>
                                    <div class="input-group">
                                        <input name="postal_code" type="text" class="form-control" id="postal_code" placeholder="" value="{{ $branch -> postal_code }}">
                                    </div>
                                    @error('postal_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="vat_number" class="form-label fs-14 text-dark">{{ __('trans.vat number') }}</label>
                                    <div class="input-group">
                                        <input name="vat_number" type="text" class="form-control" id="vat_number" placeholder="" value="{{ $branch -> vat_number }}">
                                    </div>
                                    @error('vat_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('trans.status') }}</label>
                                    <select id="status" name="status" class="form-select" aria-label="branch status">
                                        <option selected>{{ __('trans.status') }}</option>
                                        <option value="open" {{ $branch -> status == 'open' ? 'selected': '' }}>{{ __('trans.open') }}</option>
                                        <option value="closed" {{ $branch -> status == 'closed' ? 'selected': '' }}>{{ __('trans.closed') }}</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary" type="submit">{{ __('trans.create') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

@endsection
