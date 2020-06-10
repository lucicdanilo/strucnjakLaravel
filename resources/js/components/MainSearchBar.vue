<template>
<div class="w-full h-auto bg-blue-100 text-center py-48">
    <div>
        <div class="text-2xl">
            <vue-typer
                :text='["Popravka bicikla","Časovi matematike","Postavljanje keramike","Prevoz robe","Fotografisanje i snimanje događaja","Utovar, istovar"]'
                :repeat='Infinity'
                :shuffle='false'
                initial-action='typing'
                :pre-type-delay='70'
                :type-delay='110'
                :pre-erase-delay='2000'
                :erase-delay='150'
                erase-style='clear'
                :erase-on-complete='false'
                caret-animation='blink'
                >
            </vue-typer>
        </div>
        <div class="text-lg">Pronađite stručnjake, postavite posao</div>
    </div>
    <div class="my-10">
        <div class="w-auto inline-block bg-white rounde-full mx-64 rounded-full px-1">
            <input type="text" value="Pretražite" class="px-4 py-2 rounded-l-full border-r">
            <select id="locations" class="px-2 py-3 py-2 w-40">
                <option value="" class="px-1">Lokacija</option> 
                <option value="pg" class="px-1">Podgorica</option>
                <option value="nk" class="px-1">Nikšić</option>
                <option value="br" class="px-1">Bar</option>
                <option value="dg" class="px-1">Danilovgrad</option>
            </select>
            <select id="categories" class="px-2 py-2 w-46 border-l" value="dasdasd">
                <option value="">Kategorija</option>
                <option value="građevinarstvo" class="px-1">Građevinarstvo</option>
                <option value="transport" class="px-1">Transport</option>
                <option value="zdrastvoInjega" class="px-1">Zdrastvene usluge i njega</option>
            </select>
            <button class="text-white px-4 py-2 bg-red-600 rounded-full font-bold">Pretraga</button>
        </div>
    </div>
    <div>
        <div class="m-4">Najpopularnije kategorije:</div>
        <div class="inline-block bg-gray-300 rounded-full px-4 py-2"><a href="/kategorije/građevinarstvo">Građevinarstvo</a></div>
        <div class="inline-block bg-gray-300 rounded-full px-4 py-2"><a href="/kategorije/ljepotaNjegaMedicinskeUsluge">Ljepota, njega i medicinske usluge</a></div>
        <div class="inline-block bg-gray-300 rounded-full px-4 py-2"><a href="/kteforije/edukacijaIobrazovanje">Edukacija i obrazovanje</a></div>
    </div>
</div>
</template>

<script>
import { VueTyper } from 'vue-typer'
export default {
    components: {
        VueTyper
  }
}
</script>

