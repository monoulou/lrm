<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f796b58ed774174638ad552117bf35a6356e1a3ea14e6eddb02cd82e0913bf08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c91b8a28b3a504c952ee71e3e1a4154d3953bf8983e5cb64ff688fcdf8cca0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91b8a28b3a504c952ee71e3e1a4154d3953bf8983e5cb64ff688fcdf8cca0d8->enter($__internal_c91b8a28b3a504c952ee71e3e1a4154d3953bf8983e5cb64ff688fcdf8cca0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9e8b356f43d086ab01a41681e4bb30379cea9dc3c5b122eeb8017911c5746cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8b356f43d086ab01a41681e4bb30379cea9dc3c5b122eeb8017911c5746cd1->enter($__internal_9e8b356f43d086ab01a41681e4bb30379cea9dc3c5b122eeb8017911c5746cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c91b8a28b3a504c952ee71e3e1a4154d3953bf8983e5cb64ff688fcdf8cca0d8->leave($__internal_c91b8a28b3a504c952ee71e3e1a4154d3953bf8983e5cb64ff688fcdf8cca0d8_prof);

        
        $__internal_9e8b356f43d086ab01a41681e4bb30379cea9dc3c5b122eeb8017911c5746cd1->leave($__internal_9e8b356f43d086ab01a41681e4bb30379cea9dc3c5b122eeb8017911c5746cd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
