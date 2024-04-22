<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="app font-sans min-w-screen min-h-screen bg-grey-lighter py-8 px-4">
  
  <div class="mail__wrapper max-w-md mx-auto">
   
    <div class="mail__content bg-white p-8 shadow-md">

      <div class="content__header h-64 flex flex-col items-center justify-center text-center tracking-wide leading-normal bg-black -mx-8 -mt-8">
          <h1 class="text-red text-5xl">1</h1>
          <p class="text-white text-2xl">Nouveau fournisseur</p>
      </div>

      <div class="content__body py-8 border-b">
        <p>
          Bonjour DINA !<br><br>
          Vous avez une nouvelle candidature de fournisseur.<br><br>
        
        </p>
        <p class="text-sm">
          Informations sur la nouvelle demande : <br>
          {{ $name }}
          {{ $adress}}
          {{ $tel}}
          {{ $email}}
          {{ $site}}
          {{ $capacity}},
          {{ $type}}
          {{ $category}}
          {{ $description}}
        </p>
      </div>

      <div class="content__footer mt-8 text-center text-grey-darker">
        <h3 class="text-base sm:text-lg mb-4">Thanks for using The App!</h3>
        <p>https://supermarchedina.com/</p>
      </div>

    </div>
    
    
    
    
  </div>
  
</div>

</body>
</html>