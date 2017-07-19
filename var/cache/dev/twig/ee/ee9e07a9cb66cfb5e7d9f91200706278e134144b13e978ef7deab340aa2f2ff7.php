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
        $__internal_adb9e2bb33f3be62128a80d9649e91786afe360763eaea95e7a94204816a1979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb9e2bb33f3be62128a80d9649e91786afe360763eaea95e7a94204816a1979->enter($__internal_adb9e2bb33f3be62128a80d9649e91786afe360763eaea95e7a94204816a1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fb628809bfdff6c6c11bba421771e9691b24db6fc0b73cbadab4e8be887a95e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb628809bfdff6c6c11bba421771e9691b24db6fc0b73cbadab4e8be887a95e2->enter($__internal_fb628809bfdff6c6c11bba421771e9691b24db6fc0b73cbadab4e8be887a95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_adb9e2bb33f3be62128a80d9649e91786afe360763eaea95e7a94204816a1979->leave($__internal_adb9e2bb33f3be62128a80d9649e91786afe360763eaea95e7a94204816a1979_prof);

        
        $__internal_fb628809bfdff6c6c11bba421771e9691b24db6fc0b73cbadab4e8be887a95e2->leave($__internal_fb628809bfdff6c6c11bba421771e9691b24db6fc0b73cbadab4e8be887a95e2_prof);

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
