<?php

/* MAUserBundle:Profile:show.html.twig */
class __TwigTemplate_35406ecdd17df56796dfd7f79c6295c00ef0482363676eb2429350be7d5f11ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b79fc6f17753612636a49d1556bdaeb45c49b2706bc388a605251fe9903b49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b79fc6f17753612636a49d1556bdaeb45c49b2706bc388a605251fe9903b49f->enter($__internal_1b79fc6f17753612636a49d1556bdaeb45c49b2706bc388a605251fe9903b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $__internal_188e3cfba3a9fea0e13b31305bd22748a1fce3eebc9d42353aafe34746f74742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188e3cfba3a9fea0e13b31305bd22748a1fce3eebc9d42353aafe34746f74742->enter($__internal_188e3cfba3a9fea0e13b31305bd22748a1fce3eebc9d42353aafe34746f74742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b79fc6f17753612636a49d1556bdaeb45c49b2706bc388a605251fe9903b49f->leave($__internal_1b79fc6f17753612636a49d1556bdaeb45c49b2706bc388a605251fe9903b49f_prof);

        
        $__internal_188e3cfba3a9fea0e13b31305bd22748a1fce3eebc9d42353aafe34746f74742->leave($__internal_188e3cfba3a9fea0e13b31305bd22748a1fce3eebc9d42353aafe34746f74742_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f3ca2895b2eafd3ddf439b3f263c35a185e3769f024ac44d0b5529b8981037f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3ca2895b2eafd3ddf439b3f263c35a185e3769f024ac44d0b5529b8981037f->enter($__internal_9f3ca2895b2eafd3ddf439b3f263c35a185e3769f024ac44d0b5529b8981037f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cb6b29fc84fcf37a22d7eb969a1694d46f1b2ec9c4c8b0b6b1d36bb13821109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb6b29fc84fcf37a22d7eb969a1694d46f1b2ec9c4c8b0b6b1d36bb13821109->enter($__internal_5cb6b29fc84fcf37a22d7eb969a1694d46f1b2ec9c4c8b0b6b1d36bb13821109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "MAUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5cb6b29fc84fcf37a22d7eb969a1694d46f1b2ec9c4c8b0b6b1d36bb13821109->leave($__internal_5cb6b29fc84fcf37a22d7eb969a1694d46f1b2ec9c4c8b0b6b1d36bb13821109_prof);

        
        $__internal_9f3ca2895b2eafd3ddf439b3f263c35a185e3769f024ac44d0b5529b8981037f->leave($__internal_9f3ca2895b2eafd3ddf439b3f263c35a185e3769f024ac44d0b5529b8981037f_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
