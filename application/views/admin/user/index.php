<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo site_url("admin/user")?>">User</a></li>
                            <li class="breadcrumb-item active"><?php echo $title?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url("admin/user")?>"><i class="fas fa-plus"></i>Add New</a>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tabeluser" width="100%" cellspacing = "0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>