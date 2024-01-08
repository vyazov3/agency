<?php 

// namespace App\Http\Filters;
// use Illuminate\Database\Eloquent\Builder;

// class ClientFilter extends AbstractFilter {
//     public const FIRST_NAME = "first_name";
//     public const LAST_NAME = "last_name";
//     public const CATEGORY_ID = "category_id";
//     protected function getCallbacks() : array {
//         return [
//             self::first_name=> [$this, FIRST_NAME],
//             self::last_name=> [$this, LAST_NAME],
//             self::category_id=> [$this, CATEGORY_ID],
//         ];
//     }
//     public function firstName(Builder $builder, $value) {
//         $builder->where('first_name', 'like', "%{$value}");
//     }
//     public function lastName(Builder $builder, $value) {
//         $builder->where('last_name', 'like', "%{$value}");
//     }
//     public function categoryId(Builder $builder, $value) {
//         $builder->where('category_id', "%{$value}");
//     }
// }