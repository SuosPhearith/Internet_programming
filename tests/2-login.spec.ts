import { test, expect } from '@playwright/test';
import { login } from './loginfunction.spec';

test('login', async ({ page }) => {
    
    await login(page, 'test@example.com', '12345678');

    // ======== Step3 ========
    // Assert that user can see "You are logged in!"
    await expect(page.getByText("You are logged in!")).toBeVisible();

});
