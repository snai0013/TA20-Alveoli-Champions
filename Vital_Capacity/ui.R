library("shiny")

#define IU
ui <- fluidPage(
    
    fluidRow(
        column(3,
               wellPanel(
                   radioButtons("GenderInput","Gender",
                                choices = c("Male","Female"),
                                selected = "Male"),
                   numericInput("HeightInput","Height in cm", value = FALSE , min = 110, max = 210, step = 0.1),
                   numericInput("AgeInput","Age in years", value = FALSE, min = 25, max = 80, step = 1),
                   br(),
                   numericInput("VCInput",HTML("Measured Vital Capcity (L)"), value = FALSE, min = 0, max = 5, step = 0.1),
                   helpText("(This is the value obtained after performing the procedure. 
                            The range of Vital capacity is usually between 0 to 5L)"),
               )),
        
        column(3,
               br(),
               br(),
               br(),
               br(),
               h2(imageOutput("face"), align = "center"),
               ),
        
        column(6,
               h2(uiOutput("EVC"), align = "left"),
               h2(uiOutput("VCR"), align = "left"),
               br(),
               h3(uiOutput("result"), align = "left"),
               br(),
               br(),
               h3(uiOutput("FEV"), align="left")
               )
    )
    
    )