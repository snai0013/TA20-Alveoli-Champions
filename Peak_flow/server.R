library("shiny")
library('png')

server <- function(input, output) {
    output$EPF <- renderText({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if(input$PFInput >= 0 & input$PFInput <= 700){
            if (input$GenderInput == "Male"){
                PF = round((((input$HeightInput/100 * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
            }
            else {
                PF = round((((input$HeightInput/100 * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
            }
            
            ratio = round(input$PFInput/PF*100,2)
            HTML("<font size='5'>The ideal Vital capacity as per the provided age and height should be",PF, "L/min <br><br> 
                 However the measure vital capacity after performing the procedure shows that:</font><br>")
        }
        
        else {
            HTML("<font color=\"#FF0000\">Please provide an input between 0 and 700 as ideal peak flow range 
                   for normal human is between 0-700 litres per min. </font>")
        }
        
    })
    
    output$PFR <- renderText({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if(input$PFInput >= 0 & input$PFInput <= 700){
            if (input$GenderInput == "Male"){
                PF = round((((input$HeightInput/100 * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
            }
            else {
                PF = round((((input$HeightInput/100 * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
            }
            
            ratio = round(input$PFInput/PF*100,2)
            HTML("Your measured peak flow is",ratio, "% of Ideal required Peak Flow")
        }
        
        else {
            HTML('&nbsp;')
        }
    })
    
    
    output$face <- renderImage({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if(input$PFInput >= 0 & input$PFInput <= 700){
            if (input$GenderInput == "Male"){
                PF = round((((input$HeightInput/100 * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
            }
            else {
                PF = round((((input$HeightInput/100 * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
            }
            
            ratio = round(input$PFInput/PF*100,2)
            
            
            if (ratio >= 80){
                name = 'green'
            }
            else if (ratio >= 50 & ratio < 80){
                name = 'yellow'
            }
            else if (ratio < 50){
                name = 'red'
            }
            filename <- normalizePath(file.path('./images',
                                                paste(name, '.png', sep='')))
            list(src = filename, width = 170, height = 170,
                 alt = paste("Image number", name))
        }
        
        else {
            filename <- normalizePath(file.path('./images',
                                                paste("blank", '.png', sep='')))
            list(src = filename, width = 170, height = 170)
        }

    }, deleteFile = FALSE)
    
    
    output$result <- renderUI({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if(input$PFInput >= 0 & input$PFInput <= 700){
            if (input$GenderInput == "Male"){
                PF = round((((input$HeightInput/100 * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
            }
            else {
                PF = round((((input$HeightInput/100 * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
            }
            
            ratio = round(input$PFInput/PF*100,2)
            
            url <- a("Lung improvement section", href="https://wnyl.azurewebsites.net/improve-your-lung-health/")
            
            if (ratio >= 80){
                HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Almost normal function, this is under control.")
            }
            else if (ratio >= 50 & ratio < 80){
                HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Narrowed respiratory airways, before it gets worse, 
                 start improving your lungs now.")
            }
            else if (ratio < 50){
                HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Severe narrowing airway, consider medical emergency.")
            }
        }
        
        else {
            HTML('&nbsp;')
        }
        
    })
}