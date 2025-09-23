                <ul class="menu-link">
                  <?php 
                  include_once '../app/models/categoriesModel.php';
                  $categories = \App\Models\CategoriesModel\findAll($connexion);
                  foreach ($categories as $category): 
                  ?>
                  <li><a href="index.html"><?php echo $category['name']?>[12]</a></li>
                  <?php endforeach; ?>
                </ul>