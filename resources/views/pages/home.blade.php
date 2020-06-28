
@extends('layouts.master')
@section('title', 'Home')

@section('header')
    @include('layouts.header')
@endsection

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12 col-md-12">
        <div class="row mt-3 feature">

            <div class="col-8">
                <!-- <p class=" text-left text-success text-uppercase">
                    <a href="#" class="text-success">ពេញនិយមលើទំព័រ អាស្វាវត្ត</a>
                </p> -->
                <div class="card border-1 mb-3 article-card">
                    <div class="card-body">
                        <h4 class="card-title">ហេតុអ្វីបានជាខ្ញុំចាកចេញពីកម្លាំងប៉ូលីសបន្ទាប់ពី 18 ឆ្នាំនៃការ</h4>
                        <a href="#" class="text-success" data-toggle="popover">
                            Chak Saray
                        </a>
                        <p class="d-flex justify-content-between mb-0 pb-0">
                            <small>9ម៉ោង កន្លងផុត . អាន 6នាទី</small>
                        </p>
                        <a href="#" class="text-alert">#ច្បាប់</a> <a href="#" class="text-alert">#សន្ដិសុខសង្គម</a>
                        <img class="card-img-top mt-2 mb-2" src="https://miro.medium.com/fit/c/1400/420/0*SBb7aWFYfSr9IFIl"
                        alt="Card image cap">
                        <p class="text-muted">ក្នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។</p>
                        <i class="far fa-hand-spock text-success"></i> 12
                        <span class="float-right text-muted"><span class=" ">អានបន្ដ...</span> | <i class="far fa-bookmark ml-2 text-muted"></i></span>
                    </div>
                </div>
                <div class="card border-1 mb-3">
                    <div class="card-body">
                        <h4 class="card-title">មគ្គុទ្ទេសក៍គូររូបដើម្បីបញ្ឈប់ការច្នៃប្រឌិតរបស់អ្នក</h4>
                        <a href="#" class="text-success" data-toggle="popover">Pao Chet</a>
                        <p class="d-flex justify-content-between mb-0 pb-0">
                            <small>9ម៉ោង កន្លងផុត . អាន 6នាទី</small>
                        </p>
                        
                        <img class="card-img-top mt-2 mb-2" src="https://miro.medium.com/fit/c/1400/420/0*TVJT-Pt2Fyy_8O7h"
                        alt="Card image cap">
                        <p class="text-muted">ក្នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។</p>
                        <i class="far fa-hand-spock text-success"></i> 17
                        <span class="float-right text-muted">
                            <span class=" ">អានបន្ដ...</span> | <i class="far fa-bookmark ml-2 text-muted"></i>
                        </span>
                        
                    </div>
                </div>
                <div class="card border-1 mb-3">
                    <div class="card-body">
                        <h4 class="card-title">មគ្គុទ្ទេសក៍គូររូបដើម្បីបញ្ឈប់ការច្នៃប្រឌិតរបស់អ្នក</h4>
                        <a href="#" class="text-success" data-toggle="popover">Heang Kimleang</a>
                        <p class="d-flex justify-content-between mb-0 pb-0">
                            <small>9ម៉ោង កន្លងផុត . អាន 6នាទី</small>
                        </p>
                        <img class="card-img-top mt-2 mb-2" src="https://cdn-images-1.medium.com/fit/t/1600/480/1*YnG8eDn8MmMinMRQZcCfRA.jpeg"
                        alt="Card image cap">
                        <p class="text-muted">ក្នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។</p>
                        <i class="far fa-hand-spock text-success"></i> 123
                        <span class="float-right text-muted">
                            <span class=" ">អានបន្ដ...</span> | <i class="far fa-bookmark ml-2 text-muted"></i>
                        </span>
                    </div>
                </div>
                <div class="card border-1 mb-3">
                    <div class="card-body">
                        <h4 class="card-title">ប្រសិនបើអនាគតដូចជាបច្ចុប្បន្នភាពអរិយធម៌របស់យើងនឹងដួលរលំ</h4>
                        <a href="#" class="text-success" data-toggle="popover">Heang Kimleang</a>
                        <p class="d-flex justify-content-between mb-0 pb-0">
                            <small>9ម៉ោង កន្លងផុត . អាន 6នាទី</small>
                        </p>
                        <img class="card-img-top mt-2 mb-2" src="https://cdn-images-1.medium.com/fit/t/1600/480/1*FqG59tgGrx2izzNY7scCfQ.jpeg"
                        alt="Card image cap">
                        <p class="text-muted">ក្នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។នុងនាមជាប៉ូលិសក្រុង Baltimore
                                ខ្ញុំបានប្រយុទ្ធប្រឆាំងនឹងជំងឺផ្លូវចិត្តធ្ងន់ធ្ងរ។
                                នាយកដ្ឋាននេះមិនដែលយកចិត្តទុកដាក់អំពីសុខភាពផ្លូវចិត្តរបស់ខ្ញុំទេ។</p>
                        <i class="far fa-hand-spock text-success"></i> 123
                        <span class="float-right text-muted">
                            <span class=" ">អានបន្ដ...</span> | <i class="far fa-bookmark ml-2 text-muted"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-4 pl-1">
                @include('partials.call_to_signup')
                @include('partials.lpeople')
                @include('partials.lfooter')
            </div>
        </div>
    </div>
</div>
@endsection

@section('bubble')
    @include('partials.bubble')
@endsection