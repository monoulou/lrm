<?php

/* :client:show.html.twig */
class __TwigTemplate_40ce000aa96c8450e6ca09df3eef2b73ca912dc6b36f666ae63c410464235bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d17ff75c7e7e083b2d30c7917e490bca57ba6057a8a73b508d471162c560dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d17ff75c7e7e083b2d30c7917e490bca57ba6057a8a73b508d471162c560dce->enter($__internal_8d17ff75c7e7e083b2d30c7917e490bca57ba6057a8a73b508d471162c560dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_83e6743d0018ce4b848ddd1e1bf4ea484e8303ad2f58f58e64b5906c30a40285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e6743d0018ce4b848ddd1e1bf4ea484e8303ad2f58f58e64b5906c30a40285->enter($__internal_83e6743d0018ce4b848ddd1e1bf4ea484e8303ad2f58f58e64b5906c30a40285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d17ff75c7e7e083b2d30c7917e490bca57ba6057a8a73b508d471162c560dce->leave($__internal_8d17ff75c7e7e083b2d30c7917e490bca57ba6057a8a73b508d471162c560dce_prof);

        
        $__internal_83e6743d0018ce4b848ddd1e1bf4ea484e8303ad2f58f58e64b5906c30a40285->leave($__internal_83e6743d0018ce4b848ddd1e1bf4ea484e8303ad2f58f58e64b5906c30a40285_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dbd8cfeb6beacaf7aea3d90e3de2c01a56dd399a1dd280d8ab113941e121706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbd8cfeb6beacaf7aea3d90e3de2c01a56dd399a1dd280d8ab113941e121706->enter($__internal_3dbd8cfeb6beacaf7aea3d90e3de2c01a56dd399a1dd280d8ab113941e121706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02526a2008b4987def65a9e0076c38503677f5a946e98bd7db55993bef8ac22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02526a2008b4987def65a9e0076c38503677f5a946e98bd7db55993bef8ac22f->enter($__internal_02526a2008b4987def65a9e0076c38503677f5a946e98bd7db55993bef8ac22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fonctionContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "createDate", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_02526a2008b4987def65a9e0076c38503677f5a946e98bd7db55993bef8ac22f->leave($__internal_02526a2008b4987def65a9e0076c38503677f5a946e98bd7db55993bef8ac22f_prof);

        
        $__internal_3dbd8cfeb6beacaf7aea3d90e3de2c01a56dd399a1dd280d8ab113941e121706->leave($__internal_3dbd8cfeb6beacaf7aea3d90e3de2c01a56dd399a1dd280d8ab113941e121706_prof);

    }

    public function getTemplateName()
    {
        return ":client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  135 => 55,  129 => 52,  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>{{ client.denomination }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client.telephone }}</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>{{ client.nomContact }}</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>{{ client.fonctionContact }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ client.etat }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ client.commentaire }}</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>{{ client.createDate }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_client_edit', { 'id': client.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/show.html.twig");
    }
}