<?php
    $req = $pdo->query("SELECT * FROM annonces");
    $annonces = $req->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container py-4">
    <h2 class="fw-bold mb-4 text-center">Liste des annonces</h2>

    <?php if (!empty($annonces)): ?>
        <div class="row g-4">
            <?php foreach ($annonces as $annonce): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-black bg-dark text-white h-100 shadow-lg">
                        <!-- Image avec overlay de date -->
                        <div class="card-img-top position-relative">
                            <?php if (!empty($annonce['image'])): ?>
                                <img src="includes/annonces/uploads/<?php echo $annonce['image']; ?>" 
                                     class="img-fluid w-100 object-fit-cover" 
                                     style="height: 200px;"
                                     alt="<?php echo htmlspecialchars($annonce['titre']); ?>">
                            <?php else: ?>
                                <div class="bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;">
                                    <i class="bi bi-image text-white opacity-50" style="font-size: 3rem;"></i>
                                </div>
                            <?php endif; ?>
                            <div class="position-absolute bottom-0 end-0 bg-black text-white px-2 py-1 small" style="color: blue;">
                                <?php echo date("d/m/Y", strtotime($annonce['date_creation'])); ?>
                            </div>
                        </div>
                        
                        <!-- Corps de la carte -->
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold mb-2"><?php echo htmlspecialchars($annonce['id']).' : '.htmlspecialchars($annonce['titre']); ?></h3>
                            <div class="card-text text-white-50 mb-3 line-clamp" style="--lines: 4;">
                                <?php echo nl2br(htmlspecialchars($annonce['description'])); ?>
                            </div>
                            
                            <!-- Actions -->
                            <div class="mt-auto d-flex justify-content-end gap-2">
                                <a href="update_annonce.php?id=<?php echo $annonce['id']; ?>" 
                                   class="btn btn-outline-light btn-sm rounded-1 px-3">
                                    <i class="bi bi-pencil me-1"></i> Modifier
                                </a>
                                <a href="includes/annonces/delete.php?id=<?php echo $annonce['id']; ?>"
                                   onclick="return confirm('⚠️ Es-tu sûr de vouloir supprimer cette annonce ?')"
                                   class="btn btn-outline-danger btn-sm rounded-1 px-3">
                                    <i class="bi bi-trash me-1"></i> Supprimer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center py-5 border-top border-bottom border-black">
            <i class="bi bi-megaphone text-muted display-5 mb-3"></i>
            <h4 class="text-muted">Aucune annonce disponible</h4>
        </div>
    <?php endif; ?>
</div>

<style>
    .border-black {
        border: 1px solid #000 !important;
    }
    
    .line-clamp {
        display: -webkit-box;
        -webkit-line-clamp: var(--lines, 2);
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .object-fit-cover {
        object-fit: cover;
        width: 100%;
    }
    
    .card {
        transition: transform 0.2s;
    }
    
    .card:hover {
        transform: translateY(-3px);
    }
    
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.825rem;
    }
    img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

</style>


