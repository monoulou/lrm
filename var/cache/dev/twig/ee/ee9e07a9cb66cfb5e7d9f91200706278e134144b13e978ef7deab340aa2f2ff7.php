<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cbec4e8e84cf4c4bb0064981380090709263df5245553a7c893acba77c9c5d10 extends Twig_Template
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
        $__internal_caeff068d23162754b2d0ae0ed9d3723e371b8d35ae3ed1af7be049382de3864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeff068d23162754b2d0ae0ed9d3723e371b8d35ae3ed1af7be049382de3864->enter($__internal_caeff068d23162754b2d0ae0ed9d3723e371b8d35ae3ed1af7be049382de3864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a3b72f23cb5b7dcfd4c3b4c2fc025b7f30a19bf5f775f9c21e9ee281404ed4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b72f23cb5b7dcfd4c3b4c2fc025b7f30a19bf5f775f9c21e9ee281404ed4ae->enter($__internal_a3b72f23cb5b7dcfd4c3b4c2fc025b7f30a19bf5f775f9c21e9ee281404ed4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_caeff068d23162754b2d0ae0ed9d3723e371b8d35ae3ed1af7be049382de3864->leave($__internal_caeff068d23162754b2d0ae0ed9d3723e371b8d35ae3ed1af7be049382de3864_prof);

        
        $__internal_a3b72f23cb5b7dcfd4c3b4c2fc025b7f30a19bf5f775f9c21e9ee281404ed4ae->leave($__internal_a3b72f23cb5b7dcfd4c3b4c2fc025b7f30a19bf5f775f9c21e9ee281404ed4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
