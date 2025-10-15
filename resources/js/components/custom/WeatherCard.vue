<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
    name: {
        type: String,
        default: 'Dhaka'
    },
    condition: {
        type: String,
        default: 'Sunny'
    },
    temperature: {
        type: Number,
        default: 28
    },
    windSpeed: {
        type: Number,
        default: 15
    },
    humidity: {
        type: Number,
        default: 60
    }
});

const weatherConditions = {
    'Sunny': { icon: '☀️', color: 'from-amber-400' },
    'Rainy': { icon: '🌧️', color: 'from-blue-400' },
    'Cloudy': { icon: '☁️', color: 'from-gray-400' },
    'Stormy': { icon: '⛈️', color: 'from-blue-700' },
    'Snowy': { icon: '❄️', color: 'from-blue-50' }
};

const weather = computed(() => {
    const defaultWeather = { icon: '☀️', color: 'from-amber-400', condition: 'Sunny' };
    const weatherInfo = weatherConditions[props.condition] || defaultWeather;
    return { ...weatherInfo, condition: props.condition };
});

const currentDate = new Date().toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
</script>

<template>
    <div :class="[
        'bg-gradient-to-br to-slate-800 rounded-3xl p-8 shadow-lg w-[300px] mx-auto transition-all duration-300 hover:-translate-y-1 hover:shadow-xl text-white',
        weather.condition === 'Snowy' ? 'from-slate-800' : weather.color
    ]">
        <div class="mb-6 border-b border-white/20 pb-4">
            <h2 class="text-2xl font-semibold m-0">{{ name }} Weather</h2>
            <div class="text-sm opacity-80 mt-2">{{ currentDate }}</div>
        </div>

        <div class="flex items-center justify-around mb-8">
            <div class="text-6xl mr-4 drop-shadow-md">{{ weather.icon }}</div>
            <div>
                <div class="text-5xl font-bold">{{ temperature }}°C</div>
                <div class="text-lg opacity-90">{{ weather.condition }}</div>
            </div>
        </div>

        <div class="bg-white/10 rounded-xl p-4 flex justify-around">
            <div class="flex flex-col items-center">
                <span class="text-sm opacity-70 mb-1">Humidity</span>
                <span class="font-bold">{{ humidity }}%</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-sm opacity-70 mb-1">Wind Speed</span>
                <span class="font-bold">{{ windSpeed }} km/h</span>
            </div>
        </div>
    </div>
</template>