<?php

namespace Thienkimlove\NovaDependencyContainer\Http\Requests;

use Thienkimlove\NovaDependencyContainer\HasDependencies;
use Laravel\Nova\Http\Requests\ActionRequest as NovaActionRequest;

class ActionRequest extends NovaActionRequest {

	use HasDependencies;
}
