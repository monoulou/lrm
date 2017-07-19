<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0fa7299dbc9164ca468d661308edb55d71e8ebc55c3ae81aeb3dfb65bc368b5b extends Twig_Template
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
        $__internal_4040e231979a061974c4ce92bbb66df0be1148326b74ebc4bb8ceb4f2155b22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4040e231979a061974c4ce92bbb66df0be1148326b74ebc4bb8ceb4f2155b22d->enter($__internal_4040e231979a061974c4ce92bbb66df0be1148326b74ebc4bb8ceb4f2155b22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ecc18b5a683c707162817e7f0d3e2b733b8bac158f182a3f884f55aae86e5684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc18b5a683c707162817e7f0d3e2b733b8bac158f182a3f884f55aae86e5684->enter($__internal_ecc18b5a683c707162817e7f0d3e2b733b8bac158f182a3f884f55aae86e5684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4040e231979a061974c4ce92bbb66df0be1148326b74ebc4bb8ceb4f2155b22d->leave($__internal_4040e231979a061974c4ce92bbb66df0be1148326b74ebc4bb8ceb4f2155b22d_prof);

        
        $__internal_ecc18b5a683c707162817e7f0d3e2b733b8bac158f182a3f884f55aae86e5684->leave($__internal_ecc18b5a683c707162817e7f0d3e2b733b8bac158f182a3f884f55aae86e5684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
