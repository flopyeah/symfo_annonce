<?php

namespace App\DataFixtures;

use App\Entity\Image;
use App\Entity\Annonce;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categorieVoiture = new Categorie();
        $categorieVoiture->setLibelle('Voiture');
        $manager->persist($categorieVoiture);

        $annonce = new Annonce();
        $annonce->setTitre('Renault Clio ')
            ->setDescription('Bonne voiture CT: OK')
            ->setImage('https://www.etsdeloute.com/wp-content/uploads/2019/12/renault-clio-0-9-tce-90-limited-398.jpeg')
            ->setPrix(5600.00)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorieVoiture);
        $manager->persist($annonce);

        $image = new Image();
        $image->setUrl('https://www.ouestfrance-auto.com/p/annonces/14063709_1_140637095d0244ef8291d230770822.jpg')
                ->setAnnonce($annonce);
                $manager->persist($image);

        $image = new Image();
        $image->setUrl('https://prod.pictures.autoscout24.net/listing-images/dabce0e9-d49c-4f50-91ef-ebec759b47cc_7866244b-6490-4424-bb61-7919bbba556d.jpg/420x315.jpg')
                ->setAnnonce($annonce);
                $manager->persist($image);

        $annonce = new Annonce();
        $annonce->setTitre('Peugeot 308')
            ->setDescription('Petites rayure')
            ->setImage('https://images.caradisiac.com/logos-ref/gamme/gamme--peugeot-308/S7-gamme--peugeot-308.jpg')
            ->setPrix(8050.00)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorieVoiture);
        $manager->persist($annonce);

        $categorie = new Categorie();
        $categorie->setLibelle('Moto');
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle('Immobilier');
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle('Vélo');
        $manager->persist($categorie);


        $annonce = new Annonce();
        $annonce->setTitre('VTT')
            ->setDescription('Super velo')
            ->setImage('https://contents.mediadecathlon.com/p1278143/k$dd7204716b2fd0403424dec3fdcc6c8b/sq/V+LO+TOUT+CHEMIN+RIVERSIDE+100+NOIR.jpg?f=250x250')
            ->setPrix(200.00)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);


        $annonce = new Annonce();
        $annonce->setTitre('Velo pliable ')
            ->setDescription('Petites rayure')
            ->setImage('https://contents.mediadecathlon.com/p1278143/k$dd7204716b2fd0403424dec3fdcc6c8b/sq/V+LO+TOUT+CHEMIN+RIVERSIDE+100+NOIR.jpg?f=250x250')
            ->setPrix(79.99)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);


        $annonce = new Annonce();
        $annonce->setTitre('Velo décat')
            ->setDescription('Petites rayure, mais roule bien')
            ->setImage('https://www.kelvelo.com/60465-tm_large_default/velo-electrique-tria-9-homme-500wh-28-9-v-alivio-2019.jpg')
            ->setPrix(50.00)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);

        $categorie = new Categorie();
        $categorie->setLibelle('Informatique');
        $manager->persist($categorie);


        $annonce = new Annonce();
        $annonce->setTitre('Macbook 13" ')
            ->setDescription('Petites rayure')
            ->setImage('https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp13touch-silver-select-201807_GEO_EMEA_LANG_FR?wid=892&hei=820&&qlt=80&.v=1531167612638')
            ->setPrix(1200.99)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitre('Macbook 15" ')
            ->setDescription('Petites rayure')
            ->setImage('https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2018/08/macbook-pro-2018-test-big__w770.jpg')
            ->setPrix(1400.99)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);

        $categorie = new Categorie();
        $categorie->setLibelle('Console');
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle('Téléphone');
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle('électromenager');
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle('Bricolage');
        $manager->persist($categorie);


        $annonce = new Annonce();
        $annonce->setTitre('Preceuse')
            ->setDescription('Petites rayure')
            ->setImage('https://cdn.manomano.com/energizer-perceuse-visseuse-18v-2ah-58nm-ezpp18v2b2a-P-5727671-10753027_1.jpg')
            ->setPrix(50.00)
            ->setEtat('Bon état')
            ->setCreatedAt(new \DateTime())
            ->setCategorie($categorie);
        $manager->persist($annonce);

        $categorie = new Categorie();
        $categorie->setLibelle('Jardinage');
        $manager->persist($categorie);

        $annonce = new Annonce();
        $annonce->setTitre('')
                ->setDescription('description')
                ->setImage('https://image.shutterstock.com/image-photo/colorful-flower-on-dark-tropical-260nw-721703848.jpg')
                ->setPrix(24.50)
                ->setEtat('Bon état')
                ->setCreatedAt(new \DateTime())
                ->setCategorie($categorie);
        $manager->persist($annonce);

        $manager->flush();
    }
}
