<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert'

// calender 
import type { DateValue } from "@internationalized/date"
import type { Ref } from "vue"
import { getLocalTimeZone, today } from "@internationalized/date"
import { ref } from "vue"
import { Calendar } from "@/components/ui/calendar"

const value = ref(today(getLocalTimeZone())) as Ref<DateValue>


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];
</script>

<template>

    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="p-5 relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <!-- <PlaceholderPattern /> -->
                    <Alert variant="destructive">
                        <AlertTitle>Heads up!</AlertTitle>
                        <AlertDescription>
                            You can add components to your app using the cli.
                        </AlertDescription>
                    </Alert>
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <!-- <PlaceholderPattern /> -->
                    <Calendar v-model="value" :weekday-format="'short'" class="rounded-md border" />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
