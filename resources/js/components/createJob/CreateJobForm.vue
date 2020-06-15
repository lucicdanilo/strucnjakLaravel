<template>
    <div class="inline-block absolute">
    <h1 class="text-xl font-bold text-center">Informacije o poslu</h1>
    <form class="bg-white shadow-md rounded px-64" :action="routeName" method="POST">
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Naslov
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Naslov">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="phoneNumber">
            Broj telefona
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phoneNumber" name="phoneNumber" type="text" placeholder="Broj telefona">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Cijena
        </label>
        <input class="inline-block shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="text" placeholder="EUR">
        <input class="inline-block mr-2 leading-tight" type="checkbox">
            <span class="inline-block text-sm">po dogovoru</span>
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
            Grad
        </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" type="text" placeholder="Grad">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="adress">
            Adresa
        </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adress" name="adress" type="text" placeholder="Adresa">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="adress">
            Detaljan opis
        </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="summary" name="summary" type="text" rows="6" cols="50" placeholder="Detaljan opis posla"></textarea>
        </div>
        <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 mb-10 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Postavite
        </button>
        </div>
    </form>
    </div>
</template>

<script>
export default {
    data: function() {
        return{
        routeName: "{{route(job.store)}}"
        };
    }
}
</script>

<style>

</style>
