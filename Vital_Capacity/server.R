library("shiny")
library('png')

server <- function(input, output) {
    output$EVC <- renderUI({
        req(input$HeightInput,input$AgeInput,input$VCInput)
        if (input$VCInput >= 0 & input$VCInput <= 5){
            if (input$GenderInput == "Male"){
                VC = round(((27.63 - 0.112 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            else {
                VC = round(((21.78 - 0.101 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            
            ratio = round(input$VCInput/VC*100,2)
            HTML("<font size='5'>The ideal Vital capacity as per the provided age and height should be",VC, "L <br><br> 
                 However the measure vital capacity after performing the procedure shows that:</font><br>")
            
        }
        else {HTML("<font color=\"#FF0000\">Please provide an input between 0 and 5 as ideal vital capacity range 
                   for normal human is between 0-5 litres. </font>")
        }
            
    })

    
    output$VCR <- renderUI({
        req(input$HeightInput,input$AgeInput,input$VCInput)
        if (input$VCInput >= 0 & input$VCInput <= 5){
            if (input$GenderInput == "Male"){
                VC = round(((27.63 - 0.112 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            else {
                VC = round(((21.78 - 0.101 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            
            ratio = round(input$VCInput/VC*100,2)
            HTML("Your measured vital capacity is",ratio, "% of Ideal required Vital Capacity")
        }
        
        else {
            HTML('&nbsp;')
        }

        
    })
        
    
    output$face <- renderImage({
        req(input$HeightInput,input$AgeInput,input$VCInput)
        
        if (input$VCInput >= 0 & input$VCInput <= 5){
            if (input$GenderInput == "Male"){
                VC = round(((27.63 - 0.112 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            else {
                VC = round(((21.78 - 0.101 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            
            ratio = round(input$VCInput/VC*100,2)
            
            
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
        req(input$HeightInput,input$AgeInput,input$VCInput)
        
        if (input$VCInput >= 0 & input$VCInput <= 5){
            if (input$GenderInput == "Male"){
                VC = round(((27.63 - 0.112 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            else {
                VC = round(((21.78 - 0.101 * input$AgeInput) * input$HeightInput)/1000,2)
            }
            
            ratio = round(input$VCInput/VC*100,2)
            
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
    
    output$FEV <- renderUI({
        req(input$HeightInput,input$AgeInput,input$VCInput)
        
        if (input$VCInput >= 0 & input$VCInput <= 5){
            if (input$GenderInput == "Male"){
                VC = round(((27.63 - 0.112 * input$AgeInput) * input$HeightInput)/1000,2)
                FEV = round(0.84 * VC - 0.36,2)
            }
            else {
                VC = round(((21.78 - 0.101 * input$AgeInput) * input$HeightInput)/1000,2)
                FEV = round(0.84 * VC - 0.23,2)
            }
            
            url <- a("Lung age estimator section", href="https://wnyl.azurewebsites.net/lung-age-calculator/")
            tagList("Your estimated FEV1 is", FEV, "L. You can make a note of this value in a sheet of paper as 
                    this will be useful in Lung Age Calculator. You can visit our Lung Age calculator page by 
                    clicking on the button below.")
        }
        else {
            HTML('&nbsp;')
        }
        
    })
}