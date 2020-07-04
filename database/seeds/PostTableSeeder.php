<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Storage::disk('publicImg')->deleteDirectory('posts');
        Storage::disk('publicImg')->deleteDirectory('banners');
        Post::truncate();
        Category::truncate();
        Tag::truncate();

        $category = new Category;
        $category->name = "Paginas";
        $category->save();

        $category = new Category;
        $category->name = "Noticias";
        $category->save();

        $category = new Category;
        $category->name = "Proyectos";
        $category->save();

        $category = new Category;
        $category->name = "Contenido de interes";
        $category->save();

        $category = new Category;
        $category->name = "Estrategias";
        $category->save();

        $category = new Category;
        $category->name = "Politicas Publicas";
        $category->save();

        $tag = new Tag;
        $tag->name = "Proyectos Zona Norte";
        $tag->url = str_slug("Proyectos Zona Norte");
        $tag->save();

        $tag = new Tag;
        $tag->name = "Proyectos Zona Centro - Norte";
        $tag->url = str_slug("Proyectos Zona Centro - Norte");
        $tag->save();


        $tag = new Tag;
        $tag->name = "Proyectos Zona Centro";
        $tag->url = str_slug("Proyectos Zona Centro");
        $tag->save();


        $tag = new Tag;
        $tag->name = "Proyectos Zona Sur";
        $tag->url = str_slug("Proyectos Zona Sur");
        $tag->save();

        $post = new Post;
        $post->pageName = "Principal";
        $post->title = "¿Quiénes somos?";
        $post->url = str_slug("home");
        $post->excerpt = "¿Quiénes somos?";
        $post->body = "<p>Un organismo de colaboración público-privado para incidir en las definiciones e instrumentación de la visión de&nbsp; largo plaza en Sinaloa y mejorar la competitividad de sus empresas y regiones.</p>";
        $post->urlBanner = "img/default/banner.png";
        $post->urlBannerMobile = "img/default/banner.png";
        $post->urlvideo = "https://youtu.be/0g5UI0QQ6nU";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->pageName = "Quiénes Somos";
        $post->title = "¿Qué es el CODESIN?";
        $post->url = str_slug("quienes-somos");
        $post->excerpt = "Qué es el CODESIN";
        $post->body = "<p> CODESIN es un espacio de colaboración público-privada, integrado por empresarios y funcionarios públicos, cuyo objetivo principal es influir en políticas públicas para la competitividad y el desarrollo económico de Sinaloa.
        Se crea por decreto en 1996 y se sustenta jurídicamente en la Ley de Fomento a la Inversión para el Desarrollo Económico del Estado de Sinaloa, publicada en 1997, en donde se reconoce como un organismo mixto que entre otros objetivos tiene proponer un proyecto económicos de largo plazo para el Estado, la planeación estratégica que los sustente, los mecanismos de medición de avance y la difusión que de estos conceptos debe realizarse.
        A nivel regional, CODESIN cuenta con cuatro Comités Regionales de Promoción Económica, cuyo objetivo principal es impulsar la competitividad y atractividad de sus Regiones.
        El CODESIN contribuye a crear las condiciones para atraer y retener inversiones, que es una de las formas más reconocidas para generar empleos. Crear las condiciones tiene que ver con la construcción de una plataforma competitiva, la planeación del desarrollo y con la institucionalización de un proceso de promoción que garantice al Estado la continuidad y la visión de largo plazo.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->pageName = "Qué Hacemos";
        $post->title = "Center Investment & Trade (CIT)";
        $post->url = str_slug("Qué hacemos");
        $post->excerpt = "Center Investment & Trade (CIT)";
        $post->body = "<p>El Centro para la Inversión y el Comercio de Sinaloa es una agencia especializada creada por el Consejo para el Desarrollo Económico de Sinaloa (CODESIN) en coordinación con la Secretaría de Desarrollo Económico, con la finalidad de atraer inversión nacional y extranjera, así como desarrollar y apoyar al inversionista de nuestro estado.
        Nuestro compromiso es hacer que los negocios sucedan en Sinaloa, conectando a los actores empresariales locales y a las vocaciones regionales del Estado con las oportunidades de mercado e inversionistas de todo el mundo.
        Con alcance estatal en el CIT confluyen las capacidades de gestión y apoyo del Gobierno del Estado y el empuje y visión del sector privado.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        // post categorias noticias
        $post = new Post;
        $post->pageName = "noticias";
        $post->title = "Continuidad de la Presa Santa María, una buena noticia para el Sur de Sinaloa», Presidente del CODESIN Zona Sur";
        $post->url = str_slug("Continuidad de la Presa Santa María, una buena noticia para el Sur de Sinaloa», Presidente del CODESIN Zona Sur");
        $post->excerpt = "El Presidente del Comité Regional de Promoción Económica Zona Sur de CODESIN, Alfredo Ruelas Solís, declaró que la firma del convenio entre comuneros de Santa María y Gobierno del Estado con la que aceptan la indemnización propuesta por uso de las tierras para la construcción de la Presa Santa María, es una muy buena noticia para la región sur de Sinaloa.";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 2;
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->pageName = "noticias";
        $post->title = "Firman convenio de colaboración CODESIN, SEDESU y Ayuntamiento de Escuinapa para la elaboración del Programa de Ordenamiento Ecológico Local";
        $post->url = str_slug("Firman convenio de colaboración CODESIN, SEDESU y Ayuntamiento de Escuinapa para la elaboración del Programa de Ordenamiento Ecológico Local");
        $post->excerpt = "El Consejo para el Desarrollo Económico de Sinaloa y la Secretaría de Economía presentaron la Estrategia de Desarrollo Industrial para Sinaloa, iniciativa con la cual se busca incrementar la generación de riqueza y empleo, dar valor agregado a los productos y diversificar la economía del estado a través de una mayor participación del sector manufacturero.";
        $post->body = "<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas Letraset, las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->pageName = "noticias";
        $post->title = "El pasaje estándar Lorem Ipsum, usado desde el año 1500.";
        $post->url = str_slug("El pasaje estándar Lorem Ipsum, usado desde el año 1500.");
        $post->excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $post->body = "<p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, consecteur, en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de de Finnibus Bonorum et Malorum (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, Lorem ipsum dolor sit amet.., viene de una linea en la sección 1.10.32 
        El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de de Finibus Bonorum et Malorum por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->pageName = "noticias";
        $post->title = "Traducción hecha por H. Rackham en 1914";
        $post->url = str_slug("Traducción hecha por H. Rackham en 1914");
        $post->excerpt = "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?";
        $post->body = "<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas Letraset, las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();

    }
}
