<!-- partial -->
<div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="<?=base_url('admin');?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Comment</li>
              </ol>
            </nav>
          </div>

            <div class="col-lg-12">
                <div class="grid">
                  <p class="grid-header">Table Comment User</p>
                  <div class="item-wrapper">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                          </tr>
                        </thead>

                        <?php foreach ($comment as $key => $item): ?>
                        <tbody>
                          <tr>
                              <td><?=$key +1?></td>
                              <td><?php echo $item['name']; ?></td>
                              <td><?php echo $item['email']; ?></td>
                              <td><?php echo $item['subject']; ?></td>
                              <td><?php echo $item['message']; ?></td>
                          </tr>
                        </tbody>
                            <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        