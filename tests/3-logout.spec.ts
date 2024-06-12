import { test, expect } from '@playwright/test';
import { login } from './loginfunction.spec';

test('logout', async ({ page }) => {
    
    await login(page, 'test@example.com', '12345678');

    // ======== Step3 ========
    // ------- click dropdown
    await page.click('.dropdown:nth-child(2)');

    // ======== Step4 ========
    // ------- click logout
    await page.click('text=Logout')

    // ======== Step5 ========
    // ------- expect goto landing page
    await expect(page.locator('body')).toContainText("Your Application's Landing Page.");

});
