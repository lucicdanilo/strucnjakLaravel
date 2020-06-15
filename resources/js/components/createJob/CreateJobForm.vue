<template>
    <div class="inline-block absolute">
    <h1>Informacije o poslu</h1>
    <form class="bg-white shadow-md rounded px-64">
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Naslov
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Naslov">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="phoneNumber">
            Broj telefona
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="phoneNumber" type="text" placeholder="Broj telefona">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Cijena
        </label>
        <input class="inline-block shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="price" type="text" placeholder="EUR">
        <input class="inline-block mr-2 leading-tight" type="checkbox">
            <span class="inline-block text-sm">po dogovoru</span>
        </div>
        <div class="mb-4">
        <label class="inline-block text-gray-700 text-sm font-bold mb-2" for="moneyReturn">
            Povrat novca
        </label>
        <input class="inline-block ml-4 leading-tight" type="checkbox">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
            Grad
        </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="city" type="text" placeholder="Grad">
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="adress">
            Adresa
        </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="adress" type="text" placeholder="Adresa">
        </div>
        <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Unesite specifikacije
        </button>
        </div>
    </form>
    </div>
</template>
