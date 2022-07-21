@extends(
    'layouts.admin'
)


@section('content')

<div class="content-wrapper">
<div class="container">
    <!-- <h2>Acivities Page</h2> -->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Activities</h4>
                                <div class="row">
                                <div class ="col-lg-12 text-right" style=" padding:5px 0;">
                                <a class="btn btn-primary float-right" href="create_activity.php">+ Create Activity</a>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Training ID</th>
                                                <th>Agent ID</th>
                                                <th>Training Name</th>
                                                <th>Training Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                        <tr>
                                                
                                                <td>TR-7019</td>
                                                <td>9</td>
                                                <td>Market Needs &amp; Ideation</td>
                                                <td>Generate scalable business ideas based on market needs</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-30</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-1251</td>
                                                <td>9</td>
                                                <td>Evaluating good business ideas and Introduction to the Lean Canvas</td>
                                                <td>Visualizing a business using a one-page document and understanding all the key components to run it</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-1512</td>
                                                <td>9</td>
                                                <td>Minimum Viable Product</td>
                                                <td>How to start your business fast and at the least possible cost</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-5496</td>
                                                <td>9</td>
                                                <td>Financial Feasibility Check</td>
                                                <td>Determining the feasibility of a business by analyzing costs against revenues</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-7742</td>
                                                <td>9</td>
                                                <td>Fundamentals of a successful  business</td>
                                                <td>Participants learn the key concepts about what it takes to start or run a successful business</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-7237</td>
                                                <td>9</td>
                                                <td>Linear Interview Unpacking</td>
                                                <td>Making sense of customer feedback to de</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-7774</td>
                                                <td>9</td>
                                                <td>Business Analysis</td>
                                                <td>Participants are guided on how to analyse their businesses using practical tools. Current standing of the business established and ways to improve or change specified.</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-1239</td>
                                                <td>9</td>
                                                <td>Strategic Planning &amp; Performance measurement using key metrics</td>
                                                <td>Participants understand the importance of planning, goal setting and performance measurement and can use tools that apply in their field or respective business</td>
                                                <td>2022-05-01</td>
                                                <td>2022-05-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-6063</td>
                                                <td>9</td>
                                                <td>Electronics &amp; Mechanics Business Training</td>
                                                <td>Electronics students at Nakawa vocational training center March intake 2022</td>
                                                <td>2022-05-14</td>
                                                <td>2022-10-31</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                
                                                <td>TR-3779</td>
                                                <td>9</td>
                                                <td>testing</td>
                                                <td>training description</td>
                                                <td>2022-07-14</td>
                                                <td>2022-07-15</td>
                                                <td>
                                                    <a class="btn btn-warning" href="impactmap.html">View</a>
                                                </td>
                                            </tr>
                                                                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Training ID</th>
                                                <th>Agent ID</th>
                                                <th>Training Name</th>
                                                <th>Training Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>

@endsection